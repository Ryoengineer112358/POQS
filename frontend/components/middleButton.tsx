import {Button} from "@mui/material";
import Link from 'next/link';

type Props = {
  text: string;
  href: string;
  onClickHandler?: Function;
};

const MiddleButton = (props: Props) => {

    return (
      <>
        <Link href={props.href} onClick={(e: any) => props.onClickHandler}>
          <Button
            variant="outlined"
            sx={{
              mt: 3,
              mr: 1,
              ml: 1,
              width: 160,
              height: 80,
              borderRadius: 100,
            }}
          >
              {props.text}
          </Button>
        </Link>
      </>
    )
}

export default MiddleButton;