// App.js
import React, { useEffect, useState } from "react";
import NavBar from "./components/NavBar";
import RouterOutlet from "./pages/components/RouterOutlet";
import { CircularProgress } from "@mui/material";
import { useUserContext } from "./context/UserProvider";

function App() {
  const { authentification } = useUserContext();

  useEffect(() => {
    loadApplication();
    authentification();
  }, []);

  const [isLoaded, setIsLoaded] = useState(false);

  async function loadApplication() {
    try {
      await authentification();
    } catch (error) {
      console.log(error);
    } finally {
      setIsLoaded(true);
    }
  }

  return isLoaded ? (
    <>
      <NavBar />
      <RouterOutlet />
    </>
  ) : (
    <>
      <CircularProgress />
    </>
  );
}

export default App;
