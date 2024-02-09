import axios from "axios";
import { useEffect, useState } from "react";
import { useParams, useLocation } from "react-router-dom";
import {
  CircularProgress,
  Box,
  Breadcrumbs,
  Link,
  Container,
  Typography,
} from "@mui/material";
const Planet = () => {
  const location = useLocation();
  const planetId = location.state ? location.state.planetId : null;
  const [isBusy, setIsBusy] = useState(true);

  const [planet, setPlanet] = useState([]);
  const { slug } = useParams();

  useEffect(() => {
    fetchData();
  }, [slug]); // Ajouter slug dans la liste de dépendances pour recharger les données lorsque le slug change

  const fetchData = async () => {
    try {
      const res = await axios.get(`planets/${planetId}`);
      setPlanet(res.data);
      console.log(res.data);
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
    <Container>
      <Box mt={5}>
        <Breadcrumbs aria-label="breadcrumb">
          <Link underline="hover" color="inherit" href="/">
            {"Home"}
          </Link>
          <Link
            underline="hover"
            color="inherit"
            href="/planetes"
            style={{ color: "var(--primary-color)" }}
          >
            {"Planetes"}
          </Link>
          <Link
            underline="hover"
            color="inherit"
            style={{ color: "var(--primary-color)" }}
          >
            {planet.planetName}
          </Link>
        </Breadcrumbs>
        <Box mt={5}>
          <Typography p={1} variant="h3" className="titre-planet-detail">
            gfsdghdfh
          </Typography>
          <Box className="img-planet-detail">
            <img
              src="https://upload.wikimedia.org/wikipedia/commons/e/ec/Coruscant.jpg"
              alt=""
            />
          </Box>
        </Box>
      </Box>
    </Container>
  );
};

export default Planet;
