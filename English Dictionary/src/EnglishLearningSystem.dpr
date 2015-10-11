program EnglishLearningSystem;

uses
  Sysutils,
  Vcl.Forms,
  Login in 'Login.pas' {LoginForm},
  Admin in 'Admin.pas' {AdminForm},
  Splash in 'Splash.pas' {SplashForm},
  User in 'User.pas' {UserForm},
  Password in 'Password.pas' {PasswordForm},
  Registration in 'Registration.pas' {RegisterForm};

{$R *.res}

begin
  Application.Initialize;
  Application.MainFormOnTaskbar := True;
  SplashForm := TSplashForm.Create(Application);
  SplashForm.Show;
  SplashForm.Update;
  Application.CreateForm(TLoginForm, LoginForm);
  Sleep(1000);
  SplashForm.Hide;
  SplashForm.Free;
  LoginForm.Show;
  Application.Run;
end.
