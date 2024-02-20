import { useEffect, useState } from "react";
import axios from "axios";
import { Box, Container } from "@mui/system";
import {
  Breadcrumbs,
  CircularProgress,
  IconButton,
  Link,
  Typography,
} from "@mui/material";
import PublicIcon from "@mui/icons-material/Public";
import ReusableCarousel from "../../components/Carrousel";
import { useLocation, useParams, useNavigate } from "react-router-dom"; // Importez Link de react-router-dom avec le nom d'alias RouterLink

import moment from "moment";

const Event = () => {
  const navigate = useNavigate();

  const [event, setEvent] = useState([]);
  const [isBusy, setIsBusy] = useState(true);
  const location = useLocation();
  const eventId = location.state ? location.state.eventId : null;
  const { slug } = useParams();

  useEffect(() => {
    fetchData();
  }, [slug]);

  const fetchData = async () => {
    try {
      const res = await axios.get(`events/${eventId}`);
      setEvent(res.data);
      console.log(res.data);
    } catch (error) {
      console.error(error);
    } finally {
      setIsBusy(false);
    }
  };
  // Sélectionner une image au hasard parmi celles disponibles
  const getRandomImage = () => {
    if (event.images && event.images.length > 0) {
      const randomIndex = Math.floor(Math.random() * event.images.length);
      return event.images[randomIndex].imagePath;
    } else {
      return "storage/images/notImage.png";
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
            href="/evenements"
            style={{ color: "var(--primary-color)" }}
          >
            {"Evènements"}
          </Link>
          <Link
            underline="hover"
            color="inherit"
            style={{ color: "var(--primary-color)" }}
          >
            {event.eventName}
          </Link>
        </Breadcrumbs>
        <Box mt={5}>
          <Typography p={1} variant="h3" className="titre-detail">
            {event.eventName}
          </Typography>
          <Box className="img-event-detail">
            <img
              style={{ borderRadius: "10px", width: "100%" }}
              src={`http://127.0.0.1:8000/storage/uploads/${getRandomImage()}`}
              alt={event.eventName}
            />
          </Box>
          <Box
            mt={4}
            display="flex"
            className="localisationPlanet"
            alignItems="center"
          >
            <IconButton
              onClick={() =>
                navigate(`/planetes/${event.planet.slug}`, {
                  state: { planetId: event.planet.id },
                })
              }
            >
              <PublicIcon sx={{}} fontSize="large" />
              <Typography variant="h5" ml={5} marginLeft={1}>
                {event.planet.planetName}
              </Typography>
            </IconButton>

            <Box ml={5}> {moment(event.dateTime).format("Do MMMM YYYY")}</Box>
          </Box>
          <Box mt={2} width={"80%"}>
            <Typography>{event.eventDescription}</Typography>
          </Box>
          <Box className="caroussel-container">
            <ReusableCarousel
              items={event.images}
              renderFunction={(item) => (
                <Box mt={5} className="caroussel-event">
                  <img
                    style={{
                      borderRadius: "10px",
                      width: "100%",
                    }}
                    src={`http://127.0.0.1:8000/storage/uploads/${item.imagePath}`}
                    alt={event.eventName}
                  />
                </Box>
              )}
            />
          </Box>
        </Box>
      </Box>
    </Container>
  );
};
export default Event;
