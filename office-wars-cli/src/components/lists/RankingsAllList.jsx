import React, { useEffect, useState } from "react";
import {
  Box,
  Container,
  Table,
  TableBody,
  TableCell,
  TableContainer,
  TableHead,
  TableRow,
  Paper,
  TableSortLabel,
  CircularProgress,
} from "@mui/material";
import moment from "moment";
import axios from "axios";

const RankingsAllList = () => {
  const [isBusy, setIsBusy] = useState(true);
  const [rankings, setRankings] = useState([]);
  const [orderBy, setOrderBy] = useState("id");
  const [order, setOrder] = useState("asc");

  useEffect(() => {
    fetchData();
  }, []);

  const fetchData = async () => {
    try {
      const res = await axios.get(`rankings`);
      setRankings(res.data.rankings);
    } catch (error) {
      console.error(error);
    } finally {
      setIsBusy(false);
    }
  };

  const handleSort = (property) => {
    const isAsc = orderBy === property && order === "asc";
    setOrder(isAsc ? "desc" : "asc");
    setOrderBy(property);
  };

  const sortedRankings = rankings.sort((a, b) => {
    const isAsc = order === "asc";
    if (orderBy === "resultQuizz") {
      return isAsc
        ? a.resultQuizz - b.resultQuizz
        : b.resultQuizz - a.resultQuizz;
    } else if (orderBy === "userPseudo") {
      return isAsc
        ? a.user.userPseudo.localeCompare(b.user.userPseudo)
        : b.user.userPseudo.localeCompare(a.user.userPseudo);
    } else if (orderBy === "created_at") {
      return isAsc
        ? a.created_at.localeCompare(b.created_at)
        : b.created_at.localeCompare(a.created_at);
    }
    return 0;
  });

  return isBusy ? (
    <Box sx={{ display: "flex" }}>
      <CircularProgress />
    </Box>
  ) : (
    <Container component="main" maxWidth="md">
      <TableContainer
        component={Paper}
        style={{ maxHeight: "700px", overflow: "auto" }}
      >
        <Table>
          <TableHead>
            <TableRow>
              <TableCell>
                <TableSortLabel
                  active={orderBy === "id"}
                  direction={orderBy === "id" ? order : "asc"}
                  onClick={() => handleSort("id")}
                >
                  #
                </TableSortLabel>
              </TableCell>
              <TableCell>
                <TableSortLabel
                  active={orderBy === "resultQuizz"}
                  direction={orderBy === "resultQuizz" ? order : "asc"}
                  onClick={() => handleSort("resultQuizz")}
                >
                  Résultat (%)
                </TableSortLabel>
              </TableCell>
              <TableCell>
                <TableSortLabel
                  active={orderBy === "userPseudo"}
                  direction={orderBy === "userPseudo" ? order : "asc"}
                  onClick={() => handleSort("userPseudo")}
                >
                  Pseudo
                </TableSortLabel>
              </TableCell>
              <TableCell>
                <TableSortLabel
                  active={orderBy === "created_at"}
                  direction={orderBy === "created_at" ? order : "asc"}
                  onClick={() => handleSort("created_at")}
                >
                  Date
                </TableSortLabel>
              </TableCell>
            </TableRow>
          </TableHead>
          <TableBody>
            {sortedRankings.length > 0 ? (
              sortedRankings.map((ranking, index) => (
                <TableRow key={index}>
                  <TableCell>{index + 1}</TableCell>
                  <TableCell>{ranking.resultQuizz}%</TableCell>
                  <TableCell>{ranking.user.userPseudo}</TableCell>
                  <TableCell>
                    {moment(ranking.created_at).format("dddd D MMMM YYYY")}
                  </TableCell>
                </TableRow>
              ))
            ) : (
              <TableRow>
                <TableCell colSpan={4} align="center">
                  Aucun classement disponible.
                </TableCell>
              </TableRow>
            )}
          </TableBody>
        </Table>
      </TableContainer>
    </Container>
  );
};

export default RankingsAllList;
