import { Route, Routes } from "react-router-dom";
import Home from "../Home";
import IndexPlanets from "../Planets/IndexPlanets";
import Planet from "../Planets/Planet";
import EditPlanet from "../Planets/EditPlanet";
import LoginForm from "../LoginForm";
import Dashboard from "../DashBoard";
import IndexEvents from "../events/IndexEvents";
import Event from "../events/Event";

const RouterOutlet = () => {
  return (
    <Routes>
      <Route path="/" element={<Home />} />
      <Route path="/planetes" element={<IndexPlanets />} />
      <Route path={`/planetes/:slug`} element={<Planet />} />
      <Route path={`/planetes/edit/:slug`} element={<EditPlanet />} />
      <Route path="/evenements" element={<IndexEvents />} />
      <Route path="/evenements/:slug" element={<Event />} />
      <Route path={`/login`} element={<LoginForm />} />
      <Route path={`/admin`} element={<Dashboard />} />v
    </Routes>
  );
};

export default RouterOutlet;
