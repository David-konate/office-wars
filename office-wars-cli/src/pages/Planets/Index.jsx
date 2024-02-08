import React, { useEffect, useState } from "react";
import { CircularProgress } from "@mui/material";
import { Box, Container } from "@mui/material";
import axios from "axios";
import Logo from "../../components/Logo";

const IndexPlanets = () => {
  const [isBusy, setIsBusy] = useState(true);
  const [planets, setPlanets] = useState({});

  useEffect(() => {
    fetchData();
  }, []);
  const fetchData = async () => {
    try {
      const res = await axios.get(`planets`);
      setPlanets(res.data);
      console.log(res.data);
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
    <Box
      sx={{
        position: "relative",
        overflow: "hidden",
        minHeight: "100vh",
        width: "100%", // Utilise "100vw" pour spécifier 100% de la largeur de la vue
      }}
    ></Box>
  );
};

export default IndexPlanets;
