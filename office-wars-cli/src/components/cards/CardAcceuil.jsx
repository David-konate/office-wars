import React from "react";
import {
  Typography,
  Card,
  CardContent,
  CardMedia,
  CardActionArea,
  Box,
} from "@mui/material";

const CardAcceuil = ({ label, path, src }) => {
  return (
    <Card sx={{ maxWidth: 250, marginLeft: 5, marginTop: 5 }}>
      <CardActionArea>
        <Box sx={{ width: "fit-content" }}>
          <CardMedia
            sx={{ objectFit: "fit-content", height: "200px", width: "220px" }}
            component="img"
            image={src}
            alt={label}
          />
        </Box>
        <CardContent sx={{ textAlign: "center" }}>
          <Typography gutterBottom variant="h5" component="div">
            {label}
          </Typography>
        </CardContent>
      </CardActionArea>
    </Card>
  );
};

export default CardAcceuil;
