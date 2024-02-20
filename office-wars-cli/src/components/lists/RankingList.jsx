import React, { useState } from "react";
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
} from "@mui/material";
import { useUserContext } from "../../context/UserProvider";
import moment from "moment";

const RankingsList = () => {
  const { userRankings } = useUserContext();
  console.log("userRan", userRankings);

  const [orderBy, setOrderBy] = useState("id");
  const [order, setOrder] = useState("asc");

  const handleSort = (property) => {
    const isAsc = orderBy === property && order === "asc";
    setOrder(isAsc ? "desc" : "asc");
    setOrderBy(property);
  };

  const sortedRankings = userRankings.sort((a, b) => {
    const isAsc = order === "asc";
    if (orderBy === "resultQuizz") {
      return isAsc
        ? a.resultQuizz - b.resultQuizz
        : b.resultQuizz - a.resultQuizz;
    } else if (orderBy === "timeQuizz") {
      return isAsc ? a.timeQuizz - b.timeQuizz : b.timeQuizz - a.timeQuizz;
    } else if (orderBy === "created_at") {
      return isAsc
        ? a.created_at.localeCompare(b.created_at)
        : b.created_at.localeCompare(a.created_at);
    }
    return 0;
  });

  return (
    <Container component="main" maxWidth="md">
      <TableContainer component={Paper}>
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
                  active={orderBy === "timeQuizz"}
                  direction={orderBy === "timeQuizz" ? order : "asc"}
                  onClick={() => handleSort("timeQuizz")}
                >
                  Résultat temporel
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
            {sortedRankings.map((ranking, index) => (
              <TableRow key={ranking.id}>
                <TableCell>{index + 1}</TableCell>
                <TableCell>{ranking.resultQuizz}%</TableCell>
                <TableCell>{ranking.timeQuizz}</TableCell>
                <TableCell>
                  {moment(ranking.created_at).format("dddd D MMMM YYYY")}
                </TableCell>
              </TableRow>
            ))}
          </TableBody>
        </Table>
      </TableContainer>
    </Container>
  );
};

export default RankingsList;
