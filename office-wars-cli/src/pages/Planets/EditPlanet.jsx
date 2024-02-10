import { CircularProgress } from "@mui/material";
import { Box, Container } from "@mui/system";
import axios from "axios";
import { useEffect, useState } from "react";
import { useLocation } from "react-router-dom";

const EditPlanet = () => {
  const [planet, setPlanet] = useState([]);
  const [isBusy, setIsBusy] = useState(true);
  const location = useLocation();
  const planetId = location.state ? location.state.planetName : null;

  useEffect(() => {
    fetchData();
  }, []);

  const fetchData = async () => {
    try {
      const res = await axios.get(`planets/${planetId}`);
      setPlanet(res.data.data);
      console.log(res.data.data);
    } catch (error) {
      console.error(error);
    } finally {
      setIsBusy(false);
    }
  };
  return isBusy ? (
    <Box sx={{ display: "flex" }}>
      <CircularProgress />
    </Box>
  ) : (
    <Container></Container>
  );
};
export default EditPlanet;
