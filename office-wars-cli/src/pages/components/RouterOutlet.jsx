import { Route, Routes } from "react-router-dom";
import Home from "../Home";
import IndexPlanets from "../Planets/IndexPlanets";
import Planet from "../Planets/Planet";
import EditPlanet from "../Planets/EditPlanet";
import LoginForm from "../LoginForm";
import Dashboard from "../DashBoard";
import IndexEvents from "../events/IndexEvents";
import Event from "../events/Event";
import AdminRouteGuard from "./AdminRouteGuard";
import EditEvent from "../events/EditEvent";
import Welcome from "../quizz/Welcome";

const RouterOutlet = () => {
  return (
    <Routes>
      <Route path="/" element={<Home />} />
      {/* Planets */}
      <Route path="/planetes" element={<IndexPlanets />} />
      <Route path={`/planetes/:slug`} element={<Planet />} />
      <Route
        path={`/planetes/edit/:slug`}
        element={<AdminRouteGuard element={<EditPlanet />} />}
      />
      {/* Events */}
      <Route path="/evenements" element={<IndexEvents />} />
      <Route path="/evenements/:slug" element={<Event />} />
      <Route
        path="/evenements/edit/:slug"
        element={<AdminRouteGuard element={<EditEvent />} />}
      />
      {/* Quizz */}
      <Route path="/quizz" element={<Welcome />} />

      <Route path={`/login`} element={<LoginForm />} />
      <Route
        path={`/admin`}
        element={<AdminRouteGuard element={<Dashboard />} />}
      />
    </Routes>
  );
};

export default RouterOutlet;
