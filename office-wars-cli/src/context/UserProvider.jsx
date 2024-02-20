// UserProvider.jsx
import axios from "axios";
import React, { createContext, useContext, useState } from "react";

const UserContext = createContext({});

export const UserProvider = ({ children }) => {
  const [user, setUser] = useState(null);
  const [userRankings, setUserRankings] = useState(null);
  const [userTopRankings, setUserTopRankings] = useState(null);
  const [userRankingsCount, setUserRankingsCount] = useState(null);
  const [userLatestRankings, setUserLastetRankings] = useState(null);

  function authentification() {
    axios
      .get(`/me`)
      .then((res) => {
        setUser(res.data.user);
        setUserRankings(res.data.rankings);
        setUserTopRankings(res.data.topRankings);
        setUserLastetRankings(res.data.latestRankings);
        setUserRankingsCount(res.data.totalRankingsCount);
        console.log(res.data);
      })
      .catch((e) => {
        console.log(e);
      });
  }

  return (
    <UserContext.Provider
      value={{
        userLatestRankings,
        userRankingsCount,
        userTopRankings,
        userRankings,
        user,
        setUser,
        authentification,
      }}
    >
      {children}
    </UserContext.Provider>
  );
};

export const useUserContext = () => useContext(UserContext);
