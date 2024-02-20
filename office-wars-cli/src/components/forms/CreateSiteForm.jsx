// CreateSiteForm.js
import React, { useEffect, useState } from "react";
import {
  TextField,
  Button,
  Typography,
  CircularProgress,
  InputLabel,
  Input,
  InputAdornment,
  Select,
  MenuItem,
} from "@mui/material";
import axios from "axios";
import { Box, Container } from "@mui/system";
import PhotoCamera from "@mui/icons-material/PhotoCamera";
import MessageDialog from "../message/MessageDialog";

const CreateSiteForm = () => {
  const [formData, setFormData] = useState({
    siteName: "",
    siteDescription: "",
    // Autres champs nécessaires
  });
  const [planets, setPlanets] = useState([]);
  const [selectedPlanet, setSelectedPlanet] = useState("");
  const [isBusy, setIsBusy] = useState(true);
  const [openDialog, setOpenDialog] = useState(false);
  const [dialogTitle, setDialogTitle] = useState("");
  const [dialogMessage, setDialogMessage] = useState("");

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
    formData.set("planet", selectedPlanet);

    for (var pair of formData.entries()) {
      console.log(pair[0] + ", " + pair[1]);
    }
    try {
      const res = await axios.post("sites", formData, {
        headers: {
          "Content-Type": "multipart/form-data",
        },
      });
      console.log(res.data);
      setDialogTitle("Succès");
      setDialogMessage(res.data.message);
      setOpenDialog(true);
    } catch (error) {
      setDialogTitle("Erreur");
      setDialogMessage(error.response.message);
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
      <form onSubmit={handleSubmit}>
        <Typography m={3} variant="h4" align="center" gutterBottom>
          Créer un site
        </Typography>
        <Box>
          <TextField
            label="Nom du site"
            variant="outlined"
            fullWidth
            margin="normal"
            name="siteName"
            required
            //pour update mettre un defaut value et injecté la valeur recupere
          />
        </Box>
        <Box mt={3}>
          <TextField
            label="Description du site"
            variant="outlined"
            fullWidth
            margin="normal"
            name="siteDescription"
            multiline
            rows={4}
            required
          />
        </Box>
        <Box mt={3}>
          <InputLabel htmlFor="image">Image</InputLabel>
          <Input
            type="file"
            id="photoSite"
            name="photoSite[]"
            multiple
            endAdornment={
              <InputAdornment position="end">
                <PhotoCamera />
              </InputAdornment>
            }
          />
        </Box>
        <Typography mt={3} mb={3} variant="h5" align="center" gutterBottom>
          Planète lié au site
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

        <Box>
          {/* Ajoutez d'autres champs ici */}
          <Box mt={3}>
            <Button type="submit" variant="contained" color="primary">
              Créer le site
            </Button>
          </Box>
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

export default CreateSiteForm;
