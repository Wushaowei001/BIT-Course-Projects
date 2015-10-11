unit User;

interface

uses
  Winapi.Windows, Winapi.Messages, System.SysUtils, System.Variants, System.Classes, Vcl.Graphics,
  Vcl.Controls, Vcl.Forms, Vcl.Dialogs, Vcl.ComCtrls, Vcl.StdCtrls,
  Vcl.Imaging.pngimage, Vcl.ExtCtrls, Data.DB, Data.Win.ADODB, Vcl.Grids,
  Vcl.DBGrids, Vcl.Imaging.jpeg;

type
  TUserForm = class(TForm)
    PageControl1: TPageControl;
    Main: TTabSheet;
    Query: TTabSheet;
    WordBook: TTabSheet;
    Schedule: TTabSheet;
    Quotes: TTabSheet;
    About: TTabSheet;
    Image1: TImage;
    ChangePassword: TButton;
    LogOff: TButton;
    Exit: TButton;
    Panel1: TPanel;
    ProgramIcon: TImage;
    ProductName: TLabel;
    Version: TLabel;
    Copyright: TLabel;
    Comments: TLabel;
    InputWord: TEdit;
    WordQuery: TButton;
    User: TLabel;
    Login: TLabel;
    LoginTime: TLabel;
    Study: TLabel;
    StudyTime: TLabel;
    Timer1: TTimer;
    Name: TLabel;
    ADOQuery1: TADOQuery;
    DataSource1: TDataSource;
    DBGrid1: TDBGrid;
    ADOConnection1: TADOConnection;
    AlreadyQuery: TLabel;
    Number: TLabel;
    DBGrid2: TDBGrid;
    DataSource2: TDataSource;
    ADOTable1: TADOTable;
    Add: TButton;
    DataSource3: TDataSource;
    DBGrid3: TDBGrid;
    ADOQuery2: TADOQuery;
    Update: TButton;
    WordBookNum: TLabel;
    WordNum: TLabel;
    Label1: TLabel;
    Image2: TImage;
    Label2: TLabel;
    Label3: TLabel;
    Label4: TLabel;
    procedure LogOffClick(Sender: TObject);
    procedure ExitClick(Sender: TObject);
    procedure FormCloseQuery(Sender: TObject; var CanClose: Boolean);
    procedure Timer1Timer(Sender: TObject);
    procedure ChangePasswordClick(Sender: TObject);
    procedure WordQueryClick(Sender: TObject);
    procedure InputWordKeyPress(Sender: TObject; var Key: Char);
    procedure AddClick(Sender: TObject);
    procedure UpdateClick(Sender: TObject);
  private
    { Private declarations }
  public

  end;

var
  UserForm: TUserForm;
  name, word, part_of_speech, meaning, example: string;
  count, word_num: integer;

implementation

{$R *.dfm}
Uses Login, Password;

procedure TUserForm.AddClick(Sender: TObject);
begin
  try
    if InputWord.Text <> '' then
    begin
    ADOQuery1.Close;
    ADOQuery1.SQL.Clear;
    ADOQuery1.SQL.Add('insert into word_book(name, word, part_of_speech, meaning,example) values (:name, :word, :part_of_speech, :meaning, :example)');
    ADOQuery1.Parameters.ParamByName('name').Value := username;
    ADOQuery1.Parameters.ParamByName('word').Value := InputWord.Text;
    ADOQuery1.Parameters.ParamByName('part_of_speech').Value := part_of_speech;
    ADOQuery1.Parameters.ParamByName('meaning').Value := meaning;
    ADOQuery1.Parameters.ParamByName('example').Value := example;
    ADOQuery1.ExecSQL;
    Application.MessageBox('已加入单词本！','系统提示',64);
    part_of_speech := '';
    meaning := '';
    example := '';
    end
    else
    Application.MessageBox('无单词！','系统提示',64);
  except
    Application.MessageBox('添加失败！','系统提示',64);
  end;
end;

procedure TUserForm.ChangePasswordClick(Sender: TObject);
begin
Application.CreateForm(TPasswordForm, PasswordForm);
PasswordForm.ShowModal;
PasswordForm.Free;
end;

procedure TUserForm.ExitClick(Sender: TObject);
begin
if MessageBox(Handle,'确定要退出本系统吗？','系统提示',MB_ICONWARNING+MB_YesNo) = IDYES
then application.Terminate;
end;

procedure TUserForm.FormCloseQuery(Sender: TObject; var CanClose: Boolean);
begin
if MessageBox(Handle,'确定要退出本系统吗？','系统提示',MB_ICONWARNING+MB_YesNo) = IDNO
then CanClose := False;
end;

procedure TUserForm.InputWordKeyPress(Sender: TObject; var Key: Char);
begin
if key = #13 then
WordQueryClick(UserForm);
end;

procedure TUserForm.LogOffClick(Sender: TObject);
begin
UserForm.Free;
Application.Initialize;
Application.MainFormOnTaskbar := True;
Application.CreateForm(TLoginForm, LoginForm);
LoginForm.Show;
Application.Run;
end;

procedure TUserForm.Timer1Timer(Sender: TObject);
begin
Name.Caption := username;
Number.Caption := IntToStr(count);
WordNum.Caption := IntToStr(word_num);
LoginTime.Caption := FormatDateTime('c',CurrentTime);
StudyTime.Caption := FormatDateTime('tt',now - CurrentTime);
{*
try
ADOQuery2.Close;
ADOQuery2.SQL.Clear;
ADOQuery2.SQL.Add('insert into study_plan(name, num, study_date) values (:name, :num, :)');
ADOQuery1.Parameters.ParamByName('word').Value := InputWord.Text;
ADOQuery1.Parameters.ParamByName('part_of_speech').Value := InputPOS.Text;
ADOQuery1.Parameters.ParamByName('meaning').Value := InputMeaning.Text;
ADOQuery1.Parameters.ParamByName('example').Value := InputExample.Text;
ADOQuery1.ExecSQL;
finally

end;
*}
end;

procedure TUserForm.UpdateClick(Sender: TObject);
begin
  try
    begin
    ADOQuery2.Close;
    ADOQuery2.SQL.Clear;
    ADOQuery2.SQL.Add('select word, part_of_speech, meaning, example from word_book where name = :name');
    ADOQuery2.Parameters.ParamByName('name').Value := username;
    ADOQuery2.Open;
    end;
    word_num := ADOQuery2.RecordCount;
  except
    Application.MessageBox('查询失败！','系统提示',64);
  end;
end;

procedure TUserForm.WordQueryClick(Sender: TObject);
begin
  try
    begin
    ADOQuery1.Close;
    ADOQuery1.SQL.Clear;
    ADOQuery1.SQL.Add('select * from words where word = :word');
    ADOQuery1.Parameters.ParamByName('word').Value := InputWord.Text;
    ADOQuery1.Open;
    end;
    if ADOQuery1.RecordCount = 0 then
    Application.MessageBox('系统中无此单词！','系统提示',64)
    else
    begin
    count := count + 1;
    part_of_speech := ADOQuery1.FieldByName('part_of_speech').AsString;
    meaning := ADOQuery1.FieldByName('meaning').AsString;
    example := ADOQuery1.FieldByName('example').AsString;
    end;
  except
    Application.MessageBox('查询失败！','系统提示',64);
  end;
end;

end.
