import React, { useEffect, useState } from "react";
import axios from "axios";
import {
  Container,
  CircularProgress,
  Box,
  Typography,
  IconButton,
} from "@mui/material";
import { firstLetterUppercase } from "../../utils";
import EditIcon from "@mui/icons-material/Edit";
import DeleteIcon from "@mui/icons-material/Delete";
import { useNavigate } from "react-router-dom";

const SitesList = () => {
  const [isBusy, setIsBusy] = useState(true);
  const [sites, setsites] = useState();
  const navigate = useNavigate();

  useEffect(() => {
    fetchData();
  }, []);

  const fetchData = async () => {
    try {
      const res = await axios.get(`sites`);
      setsites(res.data);
    } catch (error) {
      console.log(error);
    } finally {
      setIsBusy(false);
    }
  };
  console.log(sites);
  return isBusy ? (
    <Box sx={{ display: "flex" }}>
      <CircularProgress />
    </Box>
  ) : (
    <Container style={{ marginTop: "30px" }} maxWidth="sm">
      {sites.map((site, index) => (
        <Box
          key={index}
          display="flex"
          alignItems="center"
          sx={{ marginBottom: 2 }}
        >
          <Box width="15%">
            <img
              style={{
                borderRadius: "10px",
                width: "100%",
                height: "50px",
                objectFit: "cover",
              }}
              src={
                site.imagesite
                  ? `http://127.0.0.1:8000/storage/uploads/${site.imagesite}`
                  : `http://127.0.0.1:8000/storage/images/notImage.png`
              }
              alt={site.imagesite}
            />
          </Box>
          <Box width="40%" ml={2}>
            <Typography> {firstLetterUppercase(site.siteName)}</Typography>
          </Box>
          <Box width="35%" ml={2}>
            <Typography>
              {firstLetterUppercase(site.planet.planetName)}
            </Typography>
          </Box>

          <Box width="10%" ml={2}>
            <IconButton
              onClick={() =>
                navigate(`/sites/edit/${site.slug}`, {
                  state: { siteId: site.id },
                })
              }
            >
              <EditIcon />
            </IconButton>
          </Box>
          <Box width="10%" ml={2}>
            <IconButton>
              <DeleteIcon />
            </IconButton>
          </Box>
        </Box>
      ))}
    </Container>
  );
};

export default SitesList;
