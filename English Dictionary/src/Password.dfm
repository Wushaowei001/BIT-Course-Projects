object PasswordForm: TPasswordForm
  Left = 0
  Top = 0
  Caption = #20462#25913#20010#20154#23494#30721
  ClientHeight = 212
  ClientWidth = 359
  Color = clBtnFace
  Font.Charset = DEFAULT_CHARSET
  Font.Color = clWindowText
  Font.Height = -11
  Font.Name = 'Tahoma'
  Font.Style = []
  OldCreateOrder = False
  PixelsPerInch = 96
  TextHeight = 13
  object NewPassword: TLabel
    Left = 80
    Top = 80
    Width = 48
    Height = 13
    Caption = #26032#23494#30721#65306
  end
  object Again: TLabel
    Left = 56
    Top = 128
    Width = 72
    Height = 13
    Caption = #30830#35748#26032#23494#30721#65306
  end
  object OldPassword: TLabel
    Left = 80
    Top = 32
    Width = 48
    Height = 13
    Caption = #21407#23494#30721#65306
  end
  object InputPassword: TEdit
    Left = 160
    Top = 77
    Width = 121
    Height = 21
    PasswordChar = '*'
    TabOrder = 0
    TextHint = #36755#20837#26032#23494#30721
  end
  object InputAgain: TEdit
    Left = 160
    Top = 125
    Width = 121
    Height = 21
    PasswordChar = '*'
    TabOrder = 1
    TextHint = #36755#20837#26032#23494#30721
    OnKeyPress = InputAgainKeyPress
  end
  object Change: TButton
    Left = 80
    Top = 168
    Width = 75
    Height = 25
    Caption = #20462#25913
    TabOrder = 2
    OnClick = ChangeClick
  end
  object Cancel: TButton
    Left = 206
    Top = 168
    Width = 75
    Height = 25
    Caption = #21462#28040
    TabOrder = 3
    OnClick = CancelClick
  end
  object InputOld: TEdit
    Left = 160
    Top = 29
    Width = 121
    Height = 21
    ParentShowHint = False
    PasswordChar = '*'
    ShowHint = True
    TabOrder = 4
    TextHint = #36755#20837#21407#23494#30721
  end
  object DataSource1: TDataSource
    DataSet = ADOQuery1
    Left = 312
    Top = 24
  end
  object ADOQuery1: TADOQuery
    Active = True
    Connection = ADOConnection1
    CursorType = ctStatic
    Parameters = <>
    SQL.Strings = (
      'select * from user_table')
    Left = 312
    Top = 80
  end
  object ADOConnection1: TADOConnection
    Connected = True
    ConnectionString = 
      'Provider=SQLOLEDB.1;Integrated Security=SSPI;Persist Security In' +
      'fo=False;Initial Catalog=Assignment3;Data Source=BIT-PC'
    LoginPrompt = False
    Provider = 'SQLOLEDB.1'
    Left = 312
    Top = 136
  end
end
