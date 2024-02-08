// App.js
import React, { useEffect } from "react";
import NavBar from "./components/NavBar";
import RouterOutlet from "./pages/components/RouterOutlet";

function App() {
  useEffect(() => {
    if (localStorage.getItem("token")) {
      // Authentification logic ici
    }
  }, [localStorage.getItem("token")]);

  const isAuthenticated = !!localStorage.getItem("token");

  return (
    <>
      <NavBar isAuthenticated={isAuthenticated} />
      <RouterOutlet />
    </>
  );
}

export default App;
