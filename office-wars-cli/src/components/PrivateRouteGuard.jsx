// PrivateRouteGuard.jsx
import React from "react";
import { Route, Navigate } from "react-router-dom";
import { useUserContext } from "../context/UserProvider";

const PrivateRouteGuard = ({ element }) => {
  const { user } = useUserContext();

  if (!user) {
    // Rediriger vers la page de connexion si l'utilisateur n'est pas connecté
    return <Navigate to="/login" />;
  }

  // Afficher le composant protégé si l'utilisateur est connecté
  return <>{element}</>;
};

export default PrivateRouteGuard;
