object RegisterForm: TRegisterForm
  Left = 0
  Top = 0
  Caption = #27880#20876#26032#29992#25143
  ClientHeight = 226
  ClientWidth = 339
  Color = clBtnFace
  Font.Charset = DEFAULT_CHARSET
  Font.Color = clWindowText
  Font.Height = -11
  Font.Name = 'Tahoma'
  Font.Style = []
  OldCreateOrder = False
  PixelsPerInch = 96
  TextHeight = 13
  object Name: TLabel
    Left = 80
    Top = 37
    Width = 48
    Height = 13
    Caption = #29992#25143#21517#65306
  end
  object Password: TLabel
    Left = 92
    Top = 77
    Width = 36
    Height = 13
    Caption = #23494#30721#65306
  end
  object Confirm: TLabel
    Left = 68
    Top = 117
    Width = 60
    Height = 13
    Caption = #30830#35748#23494#30721#65306
  end
  object InputUsername: TEdit
    Left = 160
    Top = 34
    Width = 121
    Height = 21
    TabOrder = 0
    TextHint = #36755#20837#26032#29992#25143#21517
  end
  object InputPassword: TEdit
    Left = 160
    Top = 74
    Width = 121
    Height = 21
    PasswordChar = '*'
    TabOrder = 1
    TextHint = #36755#20837#23494#30721
  end
  object InputConfirm: TEdit
    Left = 160
    Top = 114
    Width = 121
    Height = 21
    PasswordChar = '*'
    TabOrder = 2
    TextHint = #20877#27425#36755#20837#23494#30721
    OnKeyPress = InputConfirmKeyPress
  end
  object RegisterNow: TButton
    Left = 68
    Top = 176
    Width = 75
    Height = 25
    Caption = #31435#21363#27880#20876
    TabOrder = 3
    OnClick = RegisterNowClick
  end
  object Cancel: TButton
    Left = 206
    Top = 176
    Width = 75
    Height = 25
    Caption = #21462#28040
    TabOrder = 4
    OnClick = CancelClick
  end
  object ADOConnection1: TADOConnection
    Connected = True
    ConnectionString = 
      'Provider=SQLOLEDB.1;Integrated Security=SSPI;Persist Security In' +
      'fo=False;Initial Catalog=Assignment3;Data Source=BIT-PC;Use Proc' +
      'edure for Prepare=1;Auto Translate=True;Packet Size=4096;Worksta' +
      'tion ID=BIT-PC;Use Encryption for Data=False;Tag with column col' +
      'lation when possible=False'
    LoginPrompt = False
    Provider = 'SQLOLEDB.1'
    Left = 16
    Top = 16
  end
  object DataSource1: TDataSource
    DataSet = ADOQuery1
    Left = 16
    Top = 64
  end
  object ADOQuery1: TADOQuery
    Active = True
    Connection = ADOConnection1
    CursorType = ctStatic
    Parameters = <>
    SQL.Strings = (
      'select * from user_table')
    Left = 16
    Top = 120
  end
end
