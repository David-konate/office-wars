// Dashboard.js
import React, { useState } from "react";
import CreatePlanetForm from "../components/forms/CreatePlanetForm";
import CreateEventForm from "../components/forms/CreateEventForm";
import { Box, Container, Typography } from "@mui/material";
import WhiteButton from "../components/buttons/WhiteButton";
import CreateSiteForm from "../components/forms/CreateSiteForm";
import AccommodationCreateForm from "../components/forms/CreateAccommodationForm";
import PlanetList from "../components/lists/Planetslist";

const Dashboard = () => {
  const [showPlanetForm, setShowPlanetForm] = useState(false);
  const [showEventForm, setShowEventForm] = useState(false);

  const [tabs, setTabs] = useState({
    planetList: {
      id: 1,
      isOpen: true,
      buttonLabel: "Liste des planetes",
      component: PlanetList,
    },
    eventList: {
      id: 2,
      isOpen: false,
      buttonLabel: "Liste des évènements",
      component: CreateEventForm,
    },
    siteList: {
      id: 3,
      isOpen: false,
      buttonLabel: "Liste des sites",
      component: CreateSiteForm,
    },
    accomodationList: {
      id: 4,
      isOpen: false,
      buttonLabel: "Liste des lieux de vie",
      component: AccommodationCreateForm,
    },
    planetForm: {
      id: 5,
      isOpen: false,
      buttonLabel: "Créer une planete",
      component: CreatePlanetForm,
    },
    eventForm: {
      id: 6,
      isOpen: false,
      buttonLabel: "Créer un évènement",
      component: CreateEventForm,
    },
    siteForm: {
      id: 7,
      isOpen: false,
      buttonLabel: "Créer un site",
      component: CreateSiteForm,
    },
    accomodationForm: {
      id: 8,
      isOpen: false,
      buttonLabel: "Créer un lieu de vie",
      component: AccommodationCreateForm,
    },
  });

  const [tabSelected, setTabSelected] = useState(tabs["planetList"]);

  const handleCreatePlanetFormSubmit = () => {
    // Mettez à jour l'état pour ouvrir l'onglet "Liste des planètes"
    setTabSelected(tabs["planetList"]);
  };

  return (
    <Container
      style={{
        display: "flex",
        flexDirection: "column",
        alignItems: "center",
        margin: "1rem auto",
      }}
    >
      <Box>
        {Array.from({ length: Math.ceil(Object.keys(tabs).length / 4) }).map(
          (row, rowIndex) => (
            <Box
              key={rowIndex}
              display="flex"
              flexDirection="row"
              justifyContent="center" // Centrer horizontalement
              alignItems="center" // Centrer verticalement
              mb={2}
            >
              {Object.keys(tabs)
                .slice(rowIndex * 4, rowIndex * 4 + 4)
                .map((index) => (
                  <WhiteButton
                    key={index}
                    onClick={() => setTabSelected(tabs[index])}
                    isActive={tabs[index].id === tabSelected.id}
                    style={{ margin: "2" }}
                  >
                    {tabs[index].buttonLabel}
                  </WhiteButton>
                ))}
            </Box>
          )
        )}
      </Box>

      <Box>
        <tabSelected.component onFormSubmit={handleCreatePlanetFormSubmit} />
      </Box>
    </Container>
  );
};

export default Dashboard;
