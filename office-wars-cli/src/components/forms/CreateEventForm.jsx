// src/components/CreateEventForm.js

import React, { useEffect, useState } from "react";
import {
  TextField,
  Button,
  Typography,
  Container,
  Input,
  InputLabel,
  InputAdornment,
  Box,
  CircularProgress,
  Select,
  MenuItem,
} from "@mui/material";
import PhotoCamera from "@mui/icons-material/PhotoCamera";
import axios from "axios";
import MessageDialog from "../message/MessageDialog";

const CreateEventForm = () => {
  useEffect(() => {
    fetchData();
  }, []);

  const [planets, setPlanets] = useState([]);
  const [selectedPlanet, setSelectedPlanet] = useState("");

  const [isBusy, setIsBusy] = useState(true);
  const [openDialog, setOpenDialog] = useState(false);
  const [dialogTitle, setDialogTitle] = useState("");
  const [dialogMessage, setDialogMessage] = useState("");

  const fetchData = async () => {
    try {
      const res = await axios.get(`planets`);
      setPlanets(res.data);
      if (res.data.length > 0) {
        setSelectedPlanet(res.data[0].id);
      }
    } catch (error) {
      console.log(error.data.message);
    } finally {
      setIsBusy(false);
    }
  };

  // const [formData, setFormData] = useState({
  //   eventName: "",
  //   eventDescription: "",
  //   dateTime: "",
  // });

  // const handleChange = (e) => {
  //   setFormData({ ...formData, [e.target.name]: e.target.value });
  // };

  const handleSubmit = async (e) => {
    e.preventDefault();
    const formData = new FormData(e.target);
    formData.set("planet", selectedPlanet);

    for (var pair of formData.entries()) {
      console.log(pair[0] + ", " + pair[1]);
    }
    try {
      const res = await axios.post("events", formData, {
        headers: {
          "Content-Type": "multipart/form-data",
        },
      });
      setDialogTitle("Succès");
      setDialogMessage(res.data.message);
      setOpenDialog(true);
    } catch (error) {
      setDialogTitle("Erreur");
      setDialogMessage(error.response.data.message);
      setOpenDialog(true);
    }
    // Ajoutez ici la logique pour envoyer les données au backend (API Laravel)
  };

  const handleDialogClose = () => {
    setOpenDialog(false);
  };

  return isBusy ? (
    <Box sx={{ display: "flex" }}>
      <CircularProgress />
    </Box>
  ) : (
    <Container maxWidth="sm">
      <Typography mt={5} variant="h4" align="center" gutterBottom>
        Créer un événement
      </Typography>
      <form onSubmit={handleSubmit} encType="multipart/form-data">
        <TextField
          label="Nom de l'événement"
          variant="outlined"
          fullWidth
          margin="normal"
          name="eventName"
          required
          //pour update mettre un defaut value et injecté la valeur recupere
        />
        <TextField
          label="Description de l'événement"
          variant="outlined"
          fullWidth
          margin="normal"
          name="eventDescription"
          multiline
          rows={4}
          required
        />
        <TextField
          label="Date et heure de l'événement"
          type="datetime-local"
          variant="outlined"
          fullWidth
          margin="normal"
          name="dateTime"
          required
        />

        <InputLabel htmlFor="image">Image</InputLabel>
        <Input
          type="file"
          id="photoEvent"
          name="photoEvent"
          endAdornment={
            <InputAdornment position="end">
              <PhotoCamera />
            </InputAdornment>
          }
        />
        <Typography mt={3} mb={3} variant="h5" align="center" gutterBottom>
          Planète lié a l'évènement
        </Typography>
        <Select
          style={{ margin: 4 }}
          id="planet_id"
          name="planet_id"
          fullWidth
          value={selectedPlanet}
          onChange={(e) => setSelectedPlanet(e.target.value)}
        >
          {planets &&
            planets.map((planet) => (
              <MenuItem key={planet.id} value={planet.id}>
                {planet.planetName}
              </MenuItem>
            ))}
        </Select>

        <Box mt={3}>
          <Button type="submit" variant="contained" color="primary" fullWidth>
            Créer l'événement
          </Button>
        </Box>
      </form>
      <MessageDialog
        open={openDialog}
        onClose={handleDialogClose}
        title={dialogTitle}
        message={dialogMessage}
      />
    </Container>
  );
};

export default CreateEventForm;
