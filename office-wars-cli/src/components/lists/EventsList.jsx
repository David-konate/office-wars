import React, { useEffect, useState } from "react";
import axios from "axios";
import {
  Container,
  CircularProgress,
  Box,
  Typography,
  IconButton,
} from "@mui/material";
import { displayImage, firstLetterUppercase } from "../../utils";
import EditIcon from "@mui/icons-material/Edit";
import DeleteIcon from "@mui/icons-material/Delete";
import { useNavigate } from "react-router-dom";

const EventList = () => {
  const [isBusy, setIsBusy] = useState(true);
  const [events, setEvents] = useState();
  const [images, setImages] = useState();
  const navigate = useNavigate();

  useEffect(() => {
    fetchData();
  }, []);

  const fetchData = async () => {
    try {
      const res = await axios.get(`events`);
      setEvents(res.data);
      // const resImg = await axios.get(`images/eventslist`);
      // setImages(resImg.data);
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
    <Container style={{ marginTop: "30px" }} maxWidth="sm">
      {events.map((event, index) => (
        <Box
          key={index}
          display="flex"
          alignItems="center"
          sx={{ marginBottom: 2 }}
        >
          <Box width="15%">
            <img
              style={{
                borderRadius: "10px",
                width: "100%",
                height: "50px",
                objectFit: "cover",
              }}
              src={displayImage(event.image.imagePath)}
              alt={event.imageEvent}
            />
          </Box>
          <Box width="35%" ml={2}>
            <Typography> {firstLetterUppercase(event.eventName)}</Typography>
          </Box>
          <Box width="30%" ml={2}>
            <Typography>
              {firstLetterUppercase(event.planet.planetName)}
            </Typography>
          </Box>
          <Box width="10%" ml={2}>
            <IconButton
              onClick={() =>
                navigate(`/evenements/edit/${event.slug}`, {
                  state: { eventId: event.id },
                })
              }
            >
              <EditIcon />
            </IconButton>
          </Box>
          <Box width="10%" ml={2}>
            <IconButton>
              <DeleteIcon />
            </IconButton>
          </Box>
        </Box>
      ))}
    </Container>
  );
};

export default EventList;
