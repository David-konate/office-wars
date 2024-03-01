import React, { useEffect, useState } from "react";
import axios from "axios";
import {
  TextField,
  Button,
  Typography,
  Container,
  InputLabel,
  Input,
  CircularProgress,
  Box,
  IconButton,
} from "@mui/material";
import EditIcon from "@mui/icons-material/Edit";

import ConfirmationDialog from "../message/messageValidate";
import { useNavigate } from "react-router-dom";
import { displayImage } from "../../utils";

const UpdatePlanetForm = ({ planetId }) => {
  const [isBusy, setIsBusy] = useState(true);
  const navigate = useNavigate();

  const [isConfirmationDialogOpen, setIsConfirmationDialogOpen] =
    useState(false);

  const [formData, setFormData] = useState({
    planetName: "",
    planetDescription: "",
    galacticCoordinates: "",
    population: "",
    site: [],
    event: [],
    accommodation: [],
  });
  const [image, setImage] = useState(null);
  const [currentSite, setCurrentSite] = useState([]);
  const [currentEvent, setCurrentEvent] = useState([]);
  const [currentAccommodation, setCurrentAccommodation] = useState([]);

  useEffect(() => {
    fetchData();
  }, [planetId]);

  const fetchData = async () => {
    try {
      const planetResponse = await axios.get(`planets/${planetId}`);
      const planetData = planetResponse.data.data;
      setCurrentAccommodation(planetResponse.data.accommodations);
      setCurrentEvent(planetResponse.data.events);
      setCurrentSite(planetResponse.data.sites);

      setFormData({
        planetName: planetData.planetName,
        planetDescription: planetData.planetDescription,
        galacticCoordinates: planetData.galacticCoordinates,
        population: planetData.population,
        site: planetData.sites.map((site) => site.id),
        event: planetData.events.map((event) => event.id),
        accommodation: planetData.accommodations.map(
          (accommodation) => accommodation.id
        ),
      });

      setImage(
        planetData.imagePlanet
          ? `http://127.0.0.1:8000/storage/uploads/${planetData.imagePlanet}`
          : null
      );
    } catch (error) {
      console.error(error);
    } finally {
      setIsBusy(false);
    }
  };

  const handleChange = (e) => {
    setFormData({ ...formData, [e.target.name]: e.target.value });
  };
  const handleImageChange = (e) => {
    const file = e.target.files[0];
    setImage(URL.createObjectURL(file));
  };

  const handleSubmit = async (e) => {
    e.preventDefault();

    const formData = new FormData(e.target);

    try {
      await axios.post(`planets/${planetId}`, formData);

      // Ouvrir la boîte de dialogue en cas de succès
      setIsConfirmationDialogOpen(true);
    } catch (error) {
      console.error("Erreur lors de la requête POST :", error);
    }
  };

  return isBusy ? (
    <Box sx={{ display: "flex" }}>
      <CircularProgress />
    </Box>
  ) : (
    <Container maxWidth="sm">
      <Box m={5}>
        <ConfirmationDialog
          open={isConfirmationDialogOpen}
          onClose={() => setIsConfirmationDialogOpen(false)}
          onConfirm={() => {
            setIsConfirmationDialogOpen(false);
          }}
          title="Confirmation"
          message="Votre planète a été mise à jour avec succès."
        />
        <Typography variant="h4" align="center" gutterBottom>
          Mettre à jour la planète {formData.planetName}
        </Typography>
      </Box>
      <Box
        mt={5}
        mb={5}
        className="img-planet-up"
        sx={{ maxWidth: "65%", maxHeight: "65%", margin: "auto" }}
      >
        <img
          style={{
            borderRadius: "10px",
            width: "auto",
            height: "auto",
            maxWidth: "100%",
            maxHeight: "100%",
            display: "block",
            margin: "auto", // Centrer l'image horizontalement
          }}
          src={displayImage(image)}
          alt=""
        />
      </Box>
      <Box mt={5}>
        <form onSubmit={handleSubmit}>
          <TextField
            style={{ margin: 4 }}
            label="Nom de la planète"
            variant="outlined"
            fullWidth
            margin="none"
            name="planetName"
            value={formData.planetName}
            onChange={handleChange}
            required
          />

          <TextField
            style={{ margin: 4 }}
            label="Description de la planète"
            variant="outlined"
            fullWidth
            margin="none"
            name="planetDescription"
            multiline
            rows={4}
            value={formData.planetDescription}
            onChange={handleChange}
            required
          />
          <TextField
            style={{ margin: 4 }}
            label="Coordonnées galactiques"
            variant="outlined"
            fullWidth
            margin="none"
            name="galacticCoordinates"
            value={formData.galacticCoordinates}
            onChange={handleChange}
            required
          />
          <TextField
            style={{ margin: 4 }}
            label="Population"
            variant="outlined"
            fullWidth
            margin="none"
            name="population"
            type="number"
            value={formData.population}
            onChange={handleChange}
            required
          />

          <InputLabel style={{ margin: 4 }} htmlFor="imagePlanet">
            Image de la planète
          </InputLabel>
          <Input
            style={{ margin: 4, marginBottom: 5 }}
            type="file"
            id="imagePlanet"
            name="imagePlanet"
            onChange={handleImageChange}
            accept="image/*"
            fullWidth
            margin="none"
          />

          <Button
            style={{ margin: 5 }}
            type="submit"
            variant="contained"
            color="primary"
            fullWidth
          >
            Modifier la planète
          </Button>
        </form>
      </Box>{" "}
      <Typography mt={5} mb={3} variant="h5" align="center" gutterBottom>
        Éléments liés à la planète {formData.planetName}
      </Typography>
      <Box
        className="tableContainer"
        style={{ overflowX: "auto", display: "flex" }}
      >
        {/* Tableau des sites */}
        <Box style={{ width: "33%", display: "flex", flexDirection: "column" }}>
          <Typography variant="h6" align="center" gutterBottom>
            Sites
          </Typography>
          {currentSite.map((site, index) => (
            <Box
              key={index}
              className="tableRow"
              padding={1}
              sx={{ display: "flex", alignItems: "center" }}
            >
              <Box className="boxText" width={"85%"}>
                <Typography className="typoGr">{site.siteName}</Typography>
              </Box>
              <Box className="iconButton">
                <IconButton
                  onClick={() =>
                    navigate(`/sites/edit/${site.slug}`, {
                      state: { planetId: site.id },
                    })
                  }
                >
                  <EditIcon />
                </IconButton>
              </Box>
            </Box>
          ))}
        </Box>

        {/* Tableau des événements */}
        <Box style={{ width: "33%", display: "flex", flexDirection: "column" }}>
          <Typography variant="h6" align="center" gutterBottom>
            Événements
          </Typography>
          {currentEvent.map((event, index) => (
            <Box
              key={index}
              className="tableRow"
              padding={1}
              sx={{ display: "flex", alignItems: "center" }}
            >
              <Box className="boxText" width={"85%"}>
                <Typography className="typoGr">{event.eventName}</Typography>
              </Box>
              <Box className="iconButton">
                <IconButton
                  onClick={() =>
                    navigate(`/events/edit/${event.slug}`, {
                      state: { planetId: event.id },
                    })
                  }
                >
                  <EditIcon />
                </IconButton>
              </Box>
            </Box>
          ))}
        </Box>

        {/* Tableau des hébergements */}
        <Box style={{ width: "33%", display: "flex", flexDirection: "column" }}>
          <Typography variant="h6" align="center" gutterBottom>
            Hébergements
          </Typography>
          {currentAccommodation.map((accomodation, index) => (
            <Box
              key={index}
              className="tableRow"
              padding={1}
              sx={{ display: "flex", alignItems: "center" }}
            >
              <Box className="boxText" width={"85%"}>
                <Typography className="typoGr">
                  {accomodation.accomodationName}
                </Typography>
              </Box>
              <Box className="iconButton">
                <IconButton
                  onClick={() =>
                    navigate(`/accomodations/edit/${accomodation.slug}`, {
                      state: { planetId: accomodation.id },
                    })
                  }
                >
                  <EditIcon />
                </IconButton>
              </Box>
            </Box>
          ))}
        </Box>
      </Box>
    </Container>
  );
};

export default UpdatePlanetForm;
