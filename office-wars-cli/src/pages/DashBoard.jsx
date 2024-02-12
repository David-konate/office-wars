// Dashboard.js
import React, { useState } from "react";
import CreatePlanetForm from "../components/forms/CreatePlanetForm";
import CreateEventForm from "../components/forms/CreateEventForm";
import { Box, Container, Typography } from "@mui/material";
import WhiteButton from "../components/buttons/WhiteButton";
import CreateSiteForm from "../components/forms/CreateSiteForm";
import AccommodationCreateForm from "../components/forms/CreateAccommodationForm";

const Dashboard = () => {
  const [showPlanetForm, setShowPlanetForm] = useState(false);
  const [showEventForm, setShowEventForm] = useState(false);

  const [tabs, setTabs] = useState({
    planetForm: {
      id: 1,
      isOpen: true,
      buttonLabel: "Créer une planete",
      component: CreatePlanetForm,
    },
    eventForm: {
      id: 2,
      isOpen: false,
      buttonLabel: "Créer un évènement",
      component: CreateEventForm,
    },
    siteForm: {
      id: 3,
      isOpen: false,
      buttonLabel: "Créer un site",
      component: CreateSiteForm,
    },
    accomodationForm: {
      id: 4,
      isOpen: false,
      buttonLabel: "Créer un lieu de vie",
      component: AccommodationCreateForm,
    },
  });

  const [tabSelected, setTabSelected] = useState(tabs["planetForm"]);

  return (
    <Container
      style={{
        display: "flex",
        flexDirection: "column",
        alignItems: "center",
        margin: "1rem auto",
      }}
    >
      <Box m={2}>
        {Object.keys(tabs).map((index) => (
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
      <Box>
        <tabSelected.component />
      </Box>
    </Container>
  );
};

export default Dashboard;
