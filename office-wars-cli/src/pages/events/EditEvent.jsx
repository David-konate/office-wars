import { CircularProgress } from "@mui/material";
import { Box, Container } from "@mui/system";
import axios from "axios";
import { useEffect, useState } from "react";
import { useLocation } from "react-router-dom";
import UpdateEventForm from "../../components/forms/UpdateEventFrm";

const EditEvent = () => {
  const location = useLocation();
  const eventId = location.state ? location.state.eventId : null;

  useEffect(() => {
    fetchData();
  }, []);

  const fetchData = async () => {};
  return (
    <Container>
      <UpdateEventForm eventId={eventId} />
    </Container>
  );
};
export default EditEvent;
