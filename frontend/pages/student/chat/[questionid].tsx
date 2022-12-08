import React, {useEffect, useState} from 'react'
import { useAuth } from '@/hooks/auth'
import type { NextPage } from 'next'
import DefaultLayout from '@/components/defaultLayout'
import ChatMessage from '@/components/chatMessage'
import BackButton from "@/components/backButton";
import {StudentComment, StudentQuestion, Tutor, TutorAnswer} from "@/types";
import {Box} from "@mui/material";
import axios from "@/lib/axios";
import { useRouter} from "next/router";

type Message = StudentQuestion | TutorAnswer | StudentComment

const Chat: NextPage = () => {
  const router = useRouter();
  const {questionid} = router.query;
  // console.log(questionid)
  useEffect(() => {
    axios.get(`/api/questions/${questionid}`).then(
      (result) => setMessages( result.data.map((x: Message) => x))
    )
  }, [router])
  const middleware = "student"
  const { user } = useAuth({ middleware: middleware })
  const [messages, setMessages] = useState<Array<Message>>([]);

  const updateMessages = (newMessage: Message) => {
    setMessages([...messages, newMessage])
  }

  return (
    <>
       <DefaultLayout middleware={middleware}>
        <div></div>
      </DefaultLayout>
      <ChatMessage middleware={middleware} messages={messages} sendFunction={updateMessages}/>
      <Box sx={{position: 'sticky', bottom: 0}}>
        <BackButton />
      </Box>
    </>
  )
}

export default Chat