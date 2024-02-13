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

const PlanetList = () => {
  const [isBusy, setIsBusy] = useState(true);
  const [planets, setPlanets] = useState();
  const navigate = useNavigate();

  useEffect(() => {
    fetchData();
  }, []);

  const fetchData = async () => {
    try {
      const res = await axios.get(`planets`);
      setPlanets(res.data);
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
      {planets.map((planet, index) => (
        <Box
          key={index}
          display="flex"
          alignItems="center"
          sx={{ marginBottom: 2 }}
        >
          <Box>
            <img
              style={{
                borderRadius: "10px",
                width: "50px",
                height: "50px",
                objectFit: "cover",
              }}
              src={
                planet.imagePlanet
                  ? `http://127.0.0.1:8000/storage/uploads/${planet.imagePlanet}`
                  : `http://127.0.0.1:8000/storage/images/notImage.png`
              }
              alt={planet.planetName}
            />
          </Box>
          <Box ml={5}>
            <Typography> {firstLetterUppercase(planet.planetName)}</Typography>
          </Box>
          <Box sx={{ flexGrow: 1 }} />{" "}
          {/* Espace flexible pour égaliser l'espacement */}
          <Box ml={3}>
            <IconButton
              onClick={() =>
                navigate(`/planetes/edit/${planet.slug}`, {
                  state: { planetId: planet.id },
                })
              }
            >
              <EditIcon />
            </IconButton>
          </Box>
          <Box ml={3}>
            <IconButton>
              <DeleteIcon />
            </IconButton>
          </Box>
        </Box>
      ))}
    </Container>
  );
};

export default PlanetList;
