import React, { useState, useEffect } from "react";
import { View, StyleSheet } from "react-native";
import Welcome from "./src/pages/Welcome";
const App = () => {
  return (
    <View style={styles.container}>
      <Welcome />
    </View>
  );
};

const styles = StyleSheet.create({
  container: {
    flex: 1,
    alignItems: "center",
    justifyContent: "center",
    width: "100%",
  },
});

export default App;
