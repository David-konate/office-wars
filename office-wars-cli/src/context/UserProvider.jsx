// UserProvider.jsx
import axios from "axios";
import React, { createContext, useContext, useState } from "react";

const UserContext = createContext({});

export const UserProvider = ({ children }) => {
  const [user, setUser] = useState(null);

  function authentification() {
    axios
      .get(`/me`)
      .then((res) => {
        setUser(res);
      })
      .catch((e) => {
        console.log(e);
      });
  }

  return (
    <UserContext.Provider value={{ user, setUser, authentification }}>
      {children}
    </UserContext.Provider>
  );
};

export const useUserContext = () => useContext(UserContext);
