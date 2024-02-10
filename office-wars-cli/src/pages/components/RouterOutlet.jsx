import { Route, Routes } from "react-router-dom";
import Home from "../Home";
import IndexPlanets from "../Planets/IndexPlanets";
import Planet from "../Planets/Planet";
import EditPlanet from "../Planets/EditPlanet";
import LoginForm from "../LoginForm";

const RouterOutlet = () => {
  return (
    <Routes>
      <Route path="/" element={<Home />} />
      <Route path="/planetes" element={<IndexPlanets />} />
      <Route path={`/planetes/:slug`} element={<Planet />} />
      <Route path={`/planetes/edit/:slug`} element={<EditPlanet />} />
      <Route path={`/login`} element={<LoginForm />} />
    </Routes>
  );
};

export default RouterOutlet;
