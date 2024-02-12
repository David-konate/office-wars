import { useEffect, useState } from "react";
import { useLocation, useParams } from "react-router-dom";
import axios from "axios";

const Event = () => {
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
};
export default Event;
