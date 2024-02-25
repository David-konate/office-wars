import { CircularProgress, Container } from "@mui/material";
import { Box } from "@mui/system";
import axios from "axios";
import { useEffect, useState } from "react";
import { useLocation } from "react-router-dom";
import QuestionForm from "../../components/forms/QuestionForm";

const EditQuestion = () => {
  const location = useLocation();
  const questionId = location.state ? location.state.questionId : null;

  const [question, setQuestion] = useState(null);
  const [isBusy, setIsBusy] = useState(true);

  useEffect(() => {
    fetchData();
  }, []);

  const fetchData = async () => {
    try {
      const res = await axios.get(`questions/${questionId}`);
      setQuestion(res.data);
    } catch (error) {
      console.error(error);
    } finally {
      setIsBusy(false);
    }
  };

  return (
    <Container>
      {isBusy ? (
        <CircularProgress />
      ) : (
        <Box>
          {question ? (
            <QuestionForm questionId={questionId} />
          ) : (
            <p>Question introuvable.</p>
          )}
        </Box>
      )}
    </Container>
  );
};

export default EditQuestion;
