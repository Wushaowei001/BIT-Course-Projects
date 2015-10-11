unit Registration;

interface

uses
  Winapi.Windows, Winapi.Messages, System.SysUtils, System.Variants, System.Classes, Vcl.Graphics,
  Vcl.Controls, Vcl.Forms, Vcl.Dialogs, Vcl.StdCtrls, Data.DB, Data.Win.ADODB;

type
  TRegisterForm = class(TForm)
    Name: TLabel;
    InputUsername: TEdit;
    Password: TLabel;
    InputPassword: TEdit;
    Confirm: TLabel;
    InputConfirm: TEdit;
    RegisterNow: TButton;
    Cancel: TButton;
    ADOConnection1: TADOConnection;
    DataSource1: TDataSource;
    ADOQuery1: TADOQuery;
    procedure CancelClick(Sender: TObject);
    procedure RegisterNowClick(Sender: TObject);
    procedure InputConfirmKeyPress(Sender: TObject; var Key: Char);
  private
    { Private declarations }
  public
    { Public declarations }
  end;

var
  RegisterForm: TRegisterForm;
  newname, password2: string;

implementation

{$R *.dfm}

procedure TRegisterForm.CancelClick(Sender: TObject);
begin
Close;
end;

procedure TRegisterForm.InputConfirmKeyPress(Sender: TObject; var Key: Char);
begin
if key = #13 then
RegisterNowClick(RegisterForm);
end;

procedure TRegisterForm.RegisterNowClick(Sender: TObject);
begin
if (InputPassword.Text = InputConfirm.Text) and (InputPassword.Text <> '') and (InputConfirm.Text <> '') then
begin
  try
    begin
    ADOQuery1.Close;
    ADOQuery1.SQL.Clear;
    ADOQuery1.SQL.Add('insert into user_table(name, u_password) values (:newname, :password2)');
    ADOQuery1.Parameters.ParamByName('password2').Value := InputPassword.Text;
    ADOQuery1.Parameters.ParamByName('newname').Value := InputUsername.Text;
    ADOQuery1.ExecSQL;
    Application.MessageBox('注册成功！','系统提示',64);
    Close;
    end;
  except
    Application.MessageBox('用户名已存在！请重新注册','系统提示',64);
  end;
  InputPassword.Clear;
  InputUsername.Clear;
  InputConfirm.Clear;
end
else if (InputPassword.Text = '') or (InputConfirm.Text = '') then
Application.MessageBox('输入密码不能为空！请重新输入','系统提示',64)
else
Application.MessageBox('两次输入的密码不一致！请重新输入','系统提示',64);
InputPassword.Clear;
InputConfirm.Clear;
end;

end.
