unit Splash;

interface

uses
  Winapi.Windows, Winapi.Messages, System.SysUtils, System.Variants, System.Classes, Vcl.Graphics,
  Vcl.Controls, Vcl.Forms, Vcl.Dialogs, Vcl.StdCtrls, Vcl.Imaging.pngimage,
  Vcl.ExtCtrls, Vcl.ComCtrls, Vcl.Imaging.GIFImg, Vcl.Imaging.jpeg;

type
  TSplashForm = class(TForm)
    Image1: TImage;
  private
    { Private declarations }
  public

  end;

var
  SplashForm: TSplashForm;

implementation

{$R *.dfm}

end.
