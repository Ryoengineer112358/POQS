import React, { useState } from 'react'
import { useRouter } from 'next/router'
import { NextPage } from 'next'
import { useAuth } from '@/hooks/auth'
import { Box, Button, Card, TextField, Container, Typography, Grid } from '@mui/material'
import DefaultLayout from '@/components/DefaultLayout'
import Link from "next/link";

const ResetPassword: NextPage = () => {
  const router = useRouter()

  const { resetPassword } = useAuth({
    middleware: 'guest',
    redirectIfAuthenticated: '/'
  })

  const [newPassword, setNewPassword] = useState('')
  const [passwordConfirmation, setPasswordConfirmation] = useState('')
  const [errors, setErrors] = useState([])
  const [status, setStatus] = useState(null)

  const handleSubmit = (e: React.FormEvent) => {
    e.preventDefault()
    // Implement logic for sending the reset token.
    resetPassword({ setErrors, setStatus, newPassword, passwordConfirmation })
  }

  return (
    <DefaultLayout middleware="guest">
      <Grid container justifyContent="center">
        <Grid item xs={12} sm={8} md={6} lg={4}>
          <Card sx={{ p: 4, borderRadius: 8 }}>
            <Box
              onSubmit={handleSubmit}
              component="form"
              sx={{
                display: 'flex',
                flexDirection: 'column',
                alignItems: 'center',
              }}
            >
              <Typography
                variant="h6"
                align="center"
                fontWeight="bold"
                sx={{ marginBottom: '1rem' }}
              >
                パスワードリセット
              </Typography>

              {/* New Password */}
              <Box sx={{ marginBottom: '1rem', width: '100%' }}>
                <TextField
                  id="new_password"
                  type="password"
                  value={newPassword}
                  label="新しいパスワード"
                  onChange={(e) => setNewPassword(e.target.value)}
                  required
                  fullWidth
                />
              </Box>

              {/* Password Confirmation */}
              <Box sx={{ marginBottom: '1rem', width: '100%' }}>
                <TextField
                  id="password_confirmation"
                  type="password"
                  value={passwordConfirmation}
                  label="新しいパスワード (確認)"
                  onChange={(e) => setPasswordConfirmation(e.target.value)}
                  required
                  fullWidth
                />
              </Box>

              <Container sx={{ display: 'flex', justifyContent: 'center' }}>
                <Button
                  type="submit"
                  variant="contained"
                  color="primary"
                  sx={{
                    fontSize: '0.8rem',
                    py: '0.8rem',
                    px: '2.4rem',
                    textTransform: 'none',
                    width: '100%',
                  }}
                >
                  パスワードをリセット
                </Button>
              </Container>
              {errors.length > 0 && (
                <ul>
                  {errors.map((error, index) => (
                    <li key={index}>{error}</li>
                  ))}
                </ul>
              )}
              {status && <p>{status}</p>}
              <Box sx={{ display: 'flex', justifyContent: 'center', marginTop: '2rem' }}>
                <Link href="/student/login">
                  <a>ログインページに戻る</a>
                </Link>
              </Box>
            </Box>
          </Card>
        </Grid>
      </Grid>
    </DefaultLayout>
  )
}

export default ResetPassword
