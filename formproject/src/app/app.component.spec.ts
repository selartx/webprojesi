import { TestBed, ComponentFixture } from '@angular/core/testing';
import { FormComponent } from './app.component'; // Değişiklik burada

describe('FormComponent', () => { // Değişiklik burada
  let fixture: ComponentFixture<FormComponent>; // Değişiklik burada
  let component: FormComponent; // Değişiklik burada

  beforeEach(async () => {
    await TestBed.configureTestingModule({
      declarations: [FormComponent], // Değişiklik burada
    }).compileComponents();
  });

  beforeEach(() => {
    fixture = TestBed.createComponent(FormComponent);
    component = fixture.componentInstance; // Değişiklik burada
    fixture.detectChanges();
  });

  it('should create the component', () => { // Değişiklik burada
    expect(component).toBeTruthy(); // Değişiklik burada
  });

  // Diğer testler buraya eklenecek
});
