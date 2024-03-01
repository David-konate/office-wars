import React, { useState, useEffect } from "react";
import {
  TextField,
  Button,
  Select,
  MenuItem,
  FormControl,
  InputLabel,
  Checkbox,
  FormControlLabel,
  Box,
  Container,
  Input,
  Avatar,
} from "@mui/material";
import DeleteIcon from "@mui/icons-material/Delete";
import axios from "axios";
import { Await } from "react-router-dom";
import MessageDialog from "../message/MessageDialog";

const QuestionForm = ({ questionId }) => {
  const [dialogOpen, setDialogOpen] = useState(false);
  const [dialogMessage, setDialogMessage] = useState({
    title: "",
    message: "",
  });

  const handleCloseDialog = () => {
    setDialogOpen(false);
  };
  const [question, setQuestion] = useState({
    questionTitle: "",
    level_id: "",
    category_id: "",
    imageQuestion: "",
    answers: [
      { answerText: "", isCorrect: false },
      { answerText: "", isCorrect: false },
      { answerText: "", isCorrect: false },
      { answerText: "", isCorrect: false },
    ],
  });
  const [levels, setLevels] = useState([]);
  const [categories, setCategories] = useState([]);
  useEffect(() => {
    axios.get("levels").then((response) => {
      setLevels(response.data);
    });

    axios.get("categories").then((response) => {
      setCategories(response.data);
    });

    if (questionId) {
      axios.get(`questions/${questionId}`).then((response) => {
        setQuestion(response.data);
      });
    }
  }, [questionId]);

  const handleInputChange = (e) => {
    setQuestion({ ...question, [e.target.name]: e.target.value });
  };

  const handleAnswerChange = (index, field, value) => {
    const updatedAnswers = [...question.answers];
    updatedAnswers[index][field] = value;
    setQuestion({ ...question, answers: updatedAnswers });
  };

  const handleCorrectAnswerChange = (index) => {
    const updatedAnswers = [...question.answers];
    updatedAnswers.forEach((answer, i) => {
      answer.isCorrect = i === index;
    });
    setQuestion({ ...question, answers: updatedAnswers });
  };

  const handleAddAnswer = () => {
    setQuestion({
      ...question,
      answers: [...question.answers, { answerText: "", isCorrect: false }],
    });
  };

  const handleRemoveAnswer = (index) => {
    const updatedAnswers = [...question.answers];
    updatedAnswers.splice(index, 1);
    setQuestion({ ...question, answers: updatedAnswers });
  };

  const handleImageChange = (e) => {
    // Mettre à jour l'état de l'image avec les données de l'événement de fichier
    setQuestion({ ...question, imageQuestion: e.target.files[0] });
  };

  const handleSubmit = async (e) => {
    e.preventDefault();

    const formData = new FormData();
    formData.append("imageQuestion", question.imageQuestion);

    // Ajouter d'autres données au formulaire FormData si nécessaire
    formData.append("questionTitle", question.questionTitle);
    formData.append("level_id", question.level_id);
    formData.append("category_id", question.category_id);

    // Ajouter les réponses au formulaire FormData
    question.answers.forEach((answer, index) => {
      formData.append(`answers[${index}][answerText]`, answer.answerText);
      formData.append(
        `answers[${index}][isCorrect]`,
        Boolean(answer.isCorrect)
      ); // Convertir en booléen
    });

    try {
      if (questionId) {
        await axios.post(`questions/${questionId}`, formData);

        setDialogOpen(true); // Ouvrir la boîte de dialogue après une réponse réussie
        setDialogMessage({
          title: "Succès",
          message: "Votre formulaire a été mis à jour avec succès.",
        });
      } else {
        await axios.post("/questions", formData);

        setDialogOpen(true); // Ouvrir la boîte de dialogue après une réponse réussie
        setDialogMessage({
          title: "Succès",
          message: "Votre formulaire a été soumis avec succès.",
        });
      }
    } catch (error) {
      console.error(error);
      setDialogOpen(true); // Ouvrir la boîte de dialogue en cas d'erreur
      setDialogMessage({
        title: "Erreur",
        message:
          "Une erreur s'est produite lors de la soumission du formulaire.",
      });
    }
  };
  return (
    <Container>
      <Avatar
        sx={{
          width: "200px", // Ajustez la largeur selon vos besoins
          height: "200px", // Ajustez la hauteur selon vos besoins
          margin: "auto", // Centrez l'avatar horizontalement
          marginTop: "16px", // Ajoutez un espace au-dessus de l'avatar
        }}
        src={`http://127.0.0.1:8000/storage/uploads/${
          question.imageQuestion || "notImage.png"
        }`}
      />

      <form onSubmit={handleSubmit}>
        <Box
          mt={3}
          sx={{
            display: "flex",
            flexDirection: "column",
            justifyContent: "center",
            alignItems: "center",
          }}
        >
          <TextField
            label="Question ?"
            name="questionTitle"
            value={question.questionTitle}
            onChange={handleInputChange}
            multiline
            rows={4}
            sx={{
              width: "80%", // Limitez la largeur à 80%
            }}
          />
          <FormControl sx={{ width: "120px", marginTop: 2 }}>
            <InputLabel>Niveau</InputLabel>
            <Select
              name="level_id"
              value={levels.id}
              onChange={handleInputChange}
            >
              {levels.map((level) => (
                <MenuItem key={level.id} value={level.id}>
                  {level.level}
                </MenuItem>
              ))}
            </Select>
          </FormControl>
          <FormControl sx={{ width: "120px", marginTop: 2 }}>
            <InputLabel>Catégorie</InputLabel>
            <Select
              name="category_id"
              value={question.category_id}
              onChange={handleInputChange}
            >
              {categories.map((category) => (
                <MenuItem key={category.id} value={category.id}>
                  {category.categoryName}
                </MenuItem>
              ))}
            </Select>
          </FormControl>
        </Box>
        <Input
          type="file"
          accept="image/*"
          name="imageQuestion"
          onChange={handleImageChange}
          sx={{ mt: 2 }}
        />
        <Box
          sx={{
            display: "flex",
            flexDirection: "column",
            alignItems: "center",
          }}
        >
          {/* Champs des réponses */}
          {question.answers.map((answer, index) => (
            <Box key={index} mt={2}>
              <TextField
                label={`Réponse ${index + 1}`}
                value={answer.answerText}
                onChange={(e) =>
                  handleAnswerChange(index, "answerText", e.target.value)
                }
              />
              <FormControlLabel
                sx={{ ml: 3 }}
                control={
                  <Checkbox
                    checked={answer.isCorrect}
                    onChange={() => handleCorrectAnswerChange(index)}
                  />
                }
                label="Correcte"
              />
              <Button
                type="button"
                onClick={() => handleRemoveAnswer(index)}
                startIcon={<DeleteIcon />}
              />
            </Box>
          ))}
        </Box>
        <Button type="button" onClick={handleAddAnswer} mt={2}>
          Ajouter une réponse
        </Button>

        <Button type="submit" mt={2}>
          Soumettre
        </Button>
      </form>
      <MessageDialog
        open={dialogOpen}
        onClose={handleCloseDialog}
        title={dialogMessage.title}
        message={dialogMessage.message}
      />
    </Container>
  );
};

export default QuestionForm;
