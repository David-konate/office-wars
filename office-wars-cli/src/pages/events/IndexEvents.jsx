import { useEffect, useState } from "react";
import axios from "axios";
import { useNavigate } from "react-router";

import {
  Grid,
  CircularProgress,
  Box,
  Breadcrumbs,
  Link,
  Typography,
  Container,
} from "@mui/material";
import ImagesHandle from "../../components/ImagesHandle";
import { displayImage } from "../../utils";
const IndexEvents = () => {
  const navigate = useNavigate();
  useEffect(() => {}, []);
  const [events, setEvents] = useState([]);
  const [isBusy, setIsBusy] = useState(true);

  useEffect(() => {
    fetchData();
  }, []);

  const fetchData = async () => {
    try {
      const res = await axios.get(`events`);
      setEvents(res.data);
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
    <Box>
      <ImagesHandle route="images" customText="DES EVENEMENTS GALACTIQUE" />
      <Box ml={5} mr={5}>
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
            {"Evénements"}
          </Link>
        </Breadcrumbs>
        <Container>
          <Grid container mt={10} spacing={4} justifyContent={"center"}>
            {events.map((event, index) => (
              <Grid key={index} item md={4} xs={10}>
                <Box
                  className="event"
                  display="flex"
                  flexDirection="column"
                  alignItems="center"
                  justifyContent="center"
                >
                  <Typography variant="h4">{event.eventName}</Typography>
                  <Box mt={3} className="img-planetes-index">
                    <img
                      style={{
                        borderRadius: "10px",
                        width: "auto",
                        height: "auto",
                        width: "250px",
                        height: "250px",
                      }}
                      src={displayImage(event.image.imagePath)}
                      alt={event.eventName}
                    />
                  </Box>
                  <Typography
                    pl={5}
                    pr={5}
                    pt={4}
                    textAlign={"center"}
                    sx={{
                      display: "-webkit-box",
                      WebkitBoxOrient: "vertical",
                      overflow: "hidden",
                      WebkitLineClamp: 3, // Limite le nombre de lignes à afficher
                      textOverflow: "ellipsis",
                      position: "relative",
                    }}
                  >
                    {event.eventDescription}
                  </Typography>
                  <Box mt={1}>
                    <Link
                      className="custom-link"
                      component="button"
                      variant="body2"
                      onClick={() =>
                        navigate(`/evenements/${event.slug}`, {
                          state: { eventId: event.id },
                        })
                      }
                    >
                      {"EN SAVOIR PLUS"}
                    </Link>
                  </Box>
                </Box>
              </Grid>
            ))}
          </Grid>
        </Container>
      </Box>
    </Box>
  );
};

export default IndexEvents;
