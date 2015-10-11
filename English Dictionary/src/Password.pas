unit Password;

interface

uses
  Winapi.Windows, Winapi.Messages, System.SysUtils, System.Variants, System.Classes, Vcl.Graphics,
  Vcl.Controls, Vcl.Forms, Vcl.Dialogs, Vcl.StdCtrls, Data.DB, Data.Win.ADODB;

type
  TPasswordForm = class(TForm)
    NewPassword: TLabel;
    InputPassword: TEdit;
    Again: TLabel;
    InputAgain: TEdit;
    Change: TButton;
    Cancel: TButton;
    DataSource1: TDataSource;
    ADOQuery1: TADOQuery;
    ADOConnection1: TADOConnection;
    OldPassword: TLabel;
    InputOld: TEdit;
    procedure CancelClick(Sender: TObject);
    procedure ChangeClick(Sender: TObject);
    procedure InputAgainKeyPress(Sender: TObject; var Key: Char);
  private
    { Private declarations }
  public
    { Public declarations }
  end;

var
  PasswordForm: TPasswordForm;

implementation

uses Login;

{$R *.dfm}

procedure TPasswordForm.CancelClick(Sender: TObject);
begin
Close;
end;

procedure TPasswordForm.ChangeClick(Sender: TObject);
begin
if (InputPassword.Text = InputAgain.Text) and (InputPassword.Text <> '') and (InputAgain.Text <> '') then
begin
  //ShowMessage(username + trim(InputOld.Text));
  try
    begin
    ADOQuery1.Close;
    ADOQuery1.SQL.Clear;
    ADOQuery1.SQL.Add('select * from user_table where name = :username and u_password = '''+trim(InputOld.Text)+'''');
    ADOQuery1.Open;
    if ADOQuery1.RecordCount = 0 then
    Application.MessageBox('ԭ�����������������','ϵͳ��ʾ',64)
    else
    begin
    ADOQuery1.Close;
    ADOQuery1.SQL.Clear;
    ADOQuery1.SQL.Add('update user_table set u_password = '''+trim(InputPassword.Text)+''' where name = :username');
    ADOQuery1.ExecSQL;
    Application.MessageBox('�޸ĳɹ���','ϵͳ��ʾ',64);
    Close;
    end;
    end;
  except
    Application.MessageBox('�޸�ʧ�ܣ��������޸�','ϵͳ��ʾ',64);
  end;
  InputOld.Clear;
  InputPassword.Clear;
  InputAgain.Clear;
end
else if (InputPassword.Text = '') or (InputAgain.Text = '') then
Application.MessageBox('�������벻��Ϊ�գ�����������','ϵͳ��ʾ',64)
else
Application.MessageBox('������������벻һ�£�����������','ϵͳ��ʾ',64);
InputPassword.Clear;
InputAgain.Clear;
end;

procedure TPasswordForm.InputAgainKeyPress(Sender: TObject; var Key: Char);
begin
if key = #13 then
ChangeClick(PasswordForm);
end;

end.