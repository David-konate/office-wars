import { Box, Container } from "@mui/system";
import { useQuestionContext } from "../../context/QuestionProvider";
import { Card, Typography } from "@mui/material";

const BasAnswersList = () => {
  const { badAnswers } = useQuestionContext();
  console.log(badAnswers);

  return (
    <Container
      maxWidth={"40%"}
      sx={{ display: "flex", justifyContent: "center" }}
    ></Container>
  );
};

export default BasAnswersList;
