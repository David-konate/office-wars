// LevelBox.js
import React from "react";
import {
  RadioGroup,
  FormControlLabel,
  Radio,
  Typography,
  Box,
} from "@mui/material";

const levelBoxStyles = {
  textAlign: "center",
  // Ajoutez d'autres styles selon vos besoins
};

const checkboxStyles = {
  color: "var(--other-color)",
  "&.Mui-checked": {
    color: "var(--primary-color)", // Couleur de la checkbox lorsque coché
  },
  "&:hover": {
    color: "var(--primary-color)", // Couleur de la checkbox lorsqu'il est survolé
  },
};

const labelStyles = {
  color: "var(--other-color)",
};

const LevelBox = ({ currentLevel, handleLevelChange }) => {
  return (
    <Box sx={levelBoxStyles}>
      <Typography variant="h6" gutterBottom>
        Choisissez votre niveau
      </Typography>

      <Box mt={1} display="flex" justifyContent="center">
        <RadioGroup
          row
          aria-label="Niveau"
          name="level"
          value={currentLevel}
          onChange={handleLevelChange}
        >
          <FormControlLabel
            value="1"
            control={<Radio sx={checkboxStyles} />}
            label={<Typography sx={labelStyles}>1</Typography>}
          />
          <FormControlLabel
            value="2"
            control={<Radio sx={checkboxStyles} />}
            label={<Typography sx={labelStyles}>2</Typography>}
          />
          <FormControlLabel
            value="3"
            control={<Radio sx={checkboxStyles} />}
            label={<Typography sx={labelStyles}>3</Typography>}
          />
        </RadioGroup>
      </Box>
    </Box>
  );
};

export default LevelBox;
