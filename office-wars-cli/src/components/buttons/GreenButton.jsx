import { Button } from "@mui/material";

const GreenButton = ({ children, ...props }) => {
  return (
    <Button
      {...props}
      sx={{
        width: "fit-content",
        backgroundColor: "var(--primary-color)",
        color: "white",
        "&:hover": {
          background: "var(--light-dark-color)",
          color: "(--primary-color)",
        },
      }}
    >
      {children}
    </Button>
  );
};

export default GreenButton;
