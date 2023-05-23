import { useAuth } from '@/hooks/auth'
import type { NextPage } from 'next'
import Profile from '@/components/Profile'
import DefaultLayout from '@/components/DefaultLayout'
import HomeButton from '@/components/HomeButton'
import {Grid} from "@mui/material"

const MyPage: NextPage = () => {
  const middleware = "tutor"
  const { user } = useAuth({ middleware: middleware })

  return (
    <>
      <DefaultLayout middleware={middleware}>
        <div></div>
      </DefaultLayout>
      <Grid container justifyContent="center">
        <Profile name={user?.name} property="大学" university="東京大学大学院"/>
      </Grid>
      <Grid container justifyContent='right'>
        <HomeButton href='/tutor' />
      </Grid>
    </>
  )

}

export default MyPage

