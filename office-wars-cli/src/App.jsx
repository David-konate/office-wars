// App.js
import React from "react";
import { useEffect } from "react";

import NavBar from "./components/NavBar";
import RouterOutlet from "./pages/components/RouterOutlet";

function App() {
  // function load() {
  //     try {

  //     } catch (error) {

  //     }
  // }

  useEffect(() => {
    if (localStorage.getItem("token")) {
      // authentification();
    }
  }, [localStorage.getItem("token")]);
  return (
    <>
      <NavBar />
      <RouterOutlet />
    </>
  );
}

export default App;
