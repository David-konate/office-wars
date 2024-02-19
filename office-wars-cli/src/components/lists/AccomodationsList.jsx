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

const AccomodationsList = () => {
  const [isBusy, setIsBusy] = useState(true);
  const [accomodations, setAccomodations] = useState();
  const navigate = useNavigate();

  useEffect(() => {
    fetchData();
  }, []);

  const fetchData = async () => {
    try {
      const res = await axios.get(`accomodations`);
      setAccomodations(res.data);
    } catch (error) {
      console.log(error);
    } finally {
      setIsBusy(false);
    }
  };

  return isBusy ? (
    <Box sx={{ display: "flex" }}>
      <CircularProgress />
    </Box>
  ) : (
    <Container style={{ marginTop: "30px" }} maxWidth="sm">
      {accomodations.map((accomodation, index) => (
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
                width: "50px",
                height: "50px",
                objectFit: "cover",
              }}
              src={
                accomodation.imageaccomodation
                  ? `http://127.0.0.1:8000/storage/uploads/${accomodation.imageaccomodation}`
                  : `http://127.0.0.1:8000/storage/images/notImage.png`
              }
              alt={accomodation.imageaccomodation}
            />
          </Box>
          <Box width="35%" ml={2}>
            <Typography>
              {" "}
              {firstLetterUppercase(accomodation.accomodationName)}
            </Typography>
          </Box>
          <Box width="30%" ml={2}>
            <Typography>
              {firstLetterUppercase(accomodation.planet.planetName)}
            </Typography>
          </Box>
          {/* Espace flexible pour égaliser l'espacement */}
          <Box width="10%" ml={3}>
            <IconButton
              onClick={() =>
                navigate(`/accomodations/edit/${accomodation.slug}`, {
                  state: { accomodationId: accomodation.id },
                })
              }
            >
              <EditIcon />
            </IconButton>
          </Box>
          <Box width="10%" ml={3}>
            <IconButton>
              <DeleteIcon />
            </IconButton>
          </Box>
        </Box>
      ))}
    </Container>
  );
};

export default AccomodationsList;
