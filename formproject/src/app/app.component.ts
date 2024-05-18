import { Component, ElementRef, ViewChild } from '@angular/core';

@Component({
  selector: 'app-form',
  templateUrl: './form.component.html',
  styleUrls: ['./form.component.css']
})
export class FormComponent {
  @ViewChild('emailInput') emailInput!: ElementRef;
  @ViewChild('passwordInput') passwordInput!: ElementRef;
  @ViewChild('roleSelect') roleSelect!: ElementRef;
  @ViewChild('termsCheckbox') termsCheckbox!: ElementRef;
  @ViewChild('textboxInput') textboxInput!: ElementRef;

  constructor() { }

  handleTextboxInput(event: KeyboardEvent): void {
    if (event.key === 'Enter') {
      console.log(this.textboxInput.nativeElement.value);
    }
  }

  handleSubmit(): void {
    const form = document.getElementById('mainForm') as HTMLFormElement;
    if (form.checkValidity()) {
      console.log('Angular form gönderildi');
      console.log('Email:', this.emailInput.nativeElement.value);
      console.log('Password:', this.passwordInput.nativeElement.value);
      console.log('Role:', this.roleSelect.nativeElement.value);
      console.log('TextBox:', this.textboxInput.nativeElement.value);
      console.log('Terms Accepted:', this.termsCheckbox.nativeElement.checked);
    } else {
      console.log('Lütfen formu doğru şekilde doldurun.');
    }
  }

  handleReset(): void {
    const form = document.getElementById('mainForm') as HTMLFormElement;
    form.reset();
    console.log('Angular form temizlendi');
  }
}
