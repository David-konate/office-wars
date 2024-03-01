import React, { useEffect, useState } from "react";
import {
  TextField,
  Button,
  Typography,
  Container,
  Box,
  InputLabel,
  Input,
  InputAdornment,
  Select,
  MenuItem,
  CircularProgress,
} from "@mui/material";
import PhotoCamera from "@mui/icons-material/PhotoCamera";
import axios from "axios";
import MessageDialog from "../message/MessageDialog";

const AccommodationCreateForm = ({ onSubmit }) => {
  const [planets, setPlanets] = useState([]);
  const [selectedPlanet, setSelectedPlanet] = useState("");
  const [isBusy, setIsBusy] = useState(true);
  const [openDialog, setOpenDialog] = useState(false);
  const [dialogTitle, setDialogTitle] = useState("");
  const [dialogMessage, setDialogMessage] = useState("");
  const [formData, setFormData] = useState({
    accomodationName: "",
    accomodationType: "",
    numberOfRoom: 0,
    rates: 0,
  });

  useEffect(() => {
    fetchData();
  }, []);

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

  const handleSubmit = async (e) => {
    e.preventDefault();
    const formData = new FormData(e.target);
    formData.set("planet", setSelectedPlanet);

    for (var pair of formData.entries()) {
    }
    try {
      const res = await axios.post("accomodations", formData, {
        headers: {
          "Content-Type": "multipart/form-data",
        },
      });
      setDialogTitle("Succès");
      setDialogMessage(res.data.message);
      setOpenDialog(true);
    } catch (error) {
      setDialogTitle("Erreur");
      setDialogMessage(error.message);
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
      <Typography variant="h4" align="center" gutterBottom>
        Créer une nouvelle hébergement
      </Typography>
      <form onSubmit={handleSubmit}>
        <TextField
          label="Nom de l'hébergement"
          variant="outlined"
          fullWidth
          margin="normal"
          name="accomodationName"
          required
        />
        <TextField
          label="Type d'hébergement"
          variant="outlined"
          fullWidth
          margin="normal"
          name="accomodationType"
          required
        />
        <TextField
          label="Nombre de chambres/tables"
          variant="outlined"
          fullWidth
          margin="normal"
          type="number"
          name="numberOfRoom"
          required
        />
        <TextField
          label="Tarifs"
          variant="outlined"
          fullWidth
          margin="normal"
          type="number"
          name="rates"
          required
        />
        <Box mt={3}>
          <InputLabel htmlFor="image">Image</InputLabel>
          <Input
            type="file"
            id="photoAccomodation"
            name="photoAccomodation[]"
            multiple
            endAdornment={
              <InputAdornment position="end">
                <PhotoCamera />
              </InputAdornment>
            }
          />
        </Box>
        <Typography mt={3} mb={3} variant="h5" align="center" gutterBottom>
          Planète lié
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
        <Button type="submit" variant="contained" color="primary" fullWidth>
          Créer l'hébergement
        </Button>
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

export default AccommodationCreateForm;
