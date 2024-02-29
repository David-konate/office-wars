import React, { useState, useEffect } from "react";
import {
  Text,
  View,
  StyleSheet,
  ImageBackground,
  TouchableOpacity,
  Alert,
  Dimensions, // Importez Dimensions depuis react-native
} from "react-native";
import { SafeAreaView, SafeAreaProvider } from "react-native-safe-area-context";
import axios from "axios";
import { AntDesign } from "@expo/vector-icons";

const Welcome = () => {
  const [question, setQuestion] = useState();
  const { width: screenWidth, height: screenHeight } = Dimensions.get("window"); // Obtenez les dimensions de l'écran

  useEffect(() => {
    fetchData();
  }, []);

  const fetchData = async () => {
    try {
      const res = await axios.get(
        `http://192.168.1.68:8000/api/questions-random`
      );
      setQuestion(res.data);
    } catch (error) {
      console.log(error);
    }
  };

  const message = "Holocron-Trivia";
  return (
    <SafeAreaProvider style={styles.wrapper}>
      <SafeAreaView style={styles.wrapper}>
        <ImageBackground
          style={[styles.imageLayout, { width: screenWidth }]} // Ajustez la largeur de l'image
          source={require("../../assets/LightsaberM.webp")}
          blurRadius={5}
        >
          <View style={styles.container}>
            <Text style={styles.title}>{message}</Text>
            <View style={styles.question}>
              <Text style={styles.questionTitle}>
                {question?.questionTitle}
              </Text>
            </View>
            <TouchableOpacity onPress={() => fetchData()} style={styles.button}>
              <AntDesign name="questioncircleo" style={styles.questionNew} />
            </TouchableOpacity>
          </View>
          <View style={styles.bodyWrapper}>
            <Text style={styles.linkCo}>connetion</Text>
          </View>
        </ImageBackground>
      </SafeAreaView>
    </SafeAreaProvider>
  );
};

const styles = StyleSheet.create({
  container: {
    marginBottom: 1,
    flex: 1,
    alignItems: "center",
    padding: 20,
    width: "100%",
  },
  imageLayout: {
    flex: 1,
  },
  title: {
    color: "#420404",
    backgroundColor: "rgba(0, 0, 0, 0.3)",
    textShadowColor: "#d21c1c",
    textShadowOffset: { width: 2, height: 2 },
    textShadowRadius: 1,
    fontSize: 38,
    padding: 16,
    justifyContent: "center",
    textAlign: "center", // Centrer le texte
    borderRadius: 10,
  },
  wrapper: {
    flex: 1,
  },
  question: {
    marginTop: 70,
    marginBottom: 50,
    borderWidth: 1,
    borderRadius: 5,
    padding: 10,
    width: "100%", // Utiliser 100% de la largeur de l'écran
    height: "auto",
    shadowColor: "#d21c1c",
    shadowOffset: { width: 0, height: 0 },
    shadowOpacity: 1,
    shadowRadius: 10,
    backgroundColor: "rgba(0, 0, 0, 0.7)",
  },
  questionTitle: {
    padding: 5,
    color: "white",
    textAlign: "center",
    fontSize: 26,
    textShadowColor: "#420404",
    textShadowOffset: { width: 1, height: 1 },
    textShadowRadius: 1,
  },
  button: {
    marginTop: 20,
    backgroundColor: "transparent",
  },
  questionNew: {
    color: "#420404",
    textAlign: "center",
    fontSize: 40,
    textShadowColor: "#d21c1c",
    textShadowOffset: { width: 2, height: 2 },
    textShadowRadius: 1,
  },
  bodyWrapper: {
    justifyContent: "flex-end",
    color: "white",
    alignItems: "center",
  },
  linkCo: {
    color: "white",
  },
});

export default Welcome;
