import React, { useEffect, useState } from "react";
import axios from "axios";
import {
  Container,
  CircularProgress,
  Box,
  Typography,
  IconButton,
  Divider,
} from "@mui/material";
import { firstLetterUppercase } from "../../utils";
import EditIcon from "@mui/icons-material/Edit";
import DeleteIcon from "@mui/icons-material/Delete";
import { useNavigate } from "react-router-dom";
import { color } from "@mui/system";

const QuestionList = () => {
  const [isBusy, setIsBusy] = useState(true);
  const [questions, setQuestions] = useState();
  const [images, setImages] = useState();
  const navigate = useNavigate();

  useEffect(() => {
    fetchData();
  }, []);

  const fetchData = async () => {
    try {
      const res = await axios.get(`questions`);
      setQuestions(res.data);
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
      {questions.map((question, index) => (
        <Box>
          <Box
            mt={4}
            mb={2}
            key={question.id}
            display="flex"
            alignItems="center"
            sx={{ marginBottom: 2 }}
          >
            <Box width="70%" ml={2}>
              <Typography>
                {" "}
                {firstLetterUppercase(question.questionTitle)}
              </Typography>
            </Box>
            <Box pr={1} width="10%" ml={2}>
              {question.level_id}
            </Box>
            <Box width="10%" ml={2}>
              <IconButton
                onClick={() =>
                  navigate(`/questions/edit/${question.id}`, {
                    state: { questionId: question.id },
                  })
                }
              >
                {" "}
                <EditIcon />
              </IconButton>
            </Box>
            <Box width="10%" ml={2}>
              <IconButton>
                <DeleteIcon />
              </IconButton>
            </Box>
          </Box>
          <Divider
            sx={{
              margin: "0 15%",
              borderWidth: "1px",
              borderColor: "var(--other-color)",
              width: "30%", // Pour s'étendre sur la largeur complète
            }}
          />
        </Box>
      ))}
    </Container>
  );
};

export default QuestionList;
