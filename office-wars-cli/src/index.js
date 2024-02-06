// index.js
import React from "react";
import ReactDOM from "react-dom";
import { BrowserRouter } from "react-router-dom";
import { ThemeProvider as MainThemeProvider } from "./context/ThemeContext";
import CustomThemeProvider from "./context/ThemeProvider";
import App from "./App";
import "./App.scss";

ReactDOM.createRoot(document.getElementById("root")).render(
  <React.StrictMode>
    <MainThemeProvider>
      <CustomThemeProvider>
        <BrowserRouter>
          <App />
        </BrowserRouter>
      </CustomThemeProvider>
    </MainThemeProvider>
  </React.StrictMode>
);
