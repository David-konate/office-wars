import { Box, Container } from "@mui/system";
import { useQuestionContext } from "../../context/QuestionProvider";
import { Card, Typography } from "@mui/material";

const BasAnswersList = () => {
  const { badAnswers } = useQuestionContext();
  console.log(badAnswers);
  return (
    <Container maxWidth={"sm"}>
      <Box>
        <Typography>Correction </Typography>
      </Box>
      <Card>
        {badAnswers && badAnswers.length > 0 && (
          <Box>
            {badAnswers.map((badAnswer, index) => (
              <Card key={index} sx={{ marginBottom: 2, padding: 2 }}>
                <Typography variant="body1">
                  Question: {badAnswer.question.questionTitle}
                </Typography>
                <Box mt={1} display={"flex"} justifyContent={"space-evenly"}>
                  <Typography variant="body2">
                    Votre réponse: {badAnswer.answer.answerText}
                  </Typography>
                  <Typography variant="body2">
                    Bonne réponse:{" "}
                    {
                      badAnswer.goodAnswer.find(
                        (answer) => answer.isCorrect === 1
                      )?.answerText
                    }
                  </Typography>
                </Box>
              </Card>
            ))}
          </Box>
        )}
      </Card>
    </Container>
  );
};
export default BasAnswersList;
