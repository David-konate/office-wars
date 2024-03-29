import { CircularProgress } from "@mui/material";
import { Box, Container } from "@mui/system";
import axios from "axios";
import { useEffect, useState } from "react";
import { useLocation } from "react-router-dom";
import UpdatePlanetForm from "../../components/forms/UpdatePlanetForm";

const EditPlanet = () => {
  const location = useLocation();
  const planetId = location.state ? location.state.planetId : null;

  useEffect(() => {
    fetchData();
  }, []);

  const fetchData = async () => {
    // try {
    //   const res = await axios.get(`planets/${planetId}`);
    //   setPlanet(res.data.data);
    // } catch (error) {
    //   console.error(error);
    // } finally {
    //   setIsBusy(false);
    // }
  };
  return (
    <Container>
      <UpdatePlanetForm planetId={planetId} />
    </Container>
  );
};
export default EditPlanet;
