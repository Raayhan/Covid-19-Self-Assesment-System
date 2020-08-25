# Covid-19-Self-Assesment-System
Covid-19 Self Assesment System helps to detect whether you are affected by Covid-19 or not by using a questioner wizard. 


The world is at its utmost crisis moments now. Due to COVID-19 we lost many lives and many have been facing financial crisis all over the world. Economics are down due to pandemic.
 Covid-19 SAS is a “Web Application” that do a self-assessment regarding COVID-19 symptoms and give a score based on the given answers. And based on resulted score the system can suggest user what to do, either he/she can take treatment at home or need to call a doctor or go to hospital.

 ![Table](https://i.ibb.co/vBGJ6Jr/Annotation-2020-08-25-235524.png)


Baseline Features:

- The “COVID-19 Self-Assessment System” is a wizard-based system to get questionnaires about symptoms and syndromes from user.

- On each step, user will give confirmation that information are correct and proceed to next step.

- (Step 1) Takes below user inputs via simple form.

·       Age, Sex, Body temperature
If body temperature exceeds [ > 37.5 or 38.3 °C (99.5 or 100.9 °F) ], then count score 2.

- (Step 2) System ask the user if user have any of below symptoms. User can select multiple items from the list. Each of below symptom will score 3. If multiple items are selected then only one item will score 3 (any one from selection) and other items will count as 1 only.

·       Breathing problem

·       Dry cough

·       Sore throat

·       Weakness

·       Runny nose
Example:
    * Breathing problem = 3
    * Breathing problem + Dry cough = 3 + 1 = 4

- (Step 3) User will give additional information about symptoms. Each item will score 2 individually.

·       Abdominal pain,

·       Vomiting

·       Diarrhoea

·       Chest pain or pressure

·       Muscle pain

·       Loss of taste or smell

·       Rash on skin, or discoloration of fingers or toes

·       Loss of speech or movement
Example:
    * Abdominal pain = 2
    * Abdominal pain + Chest pain = 2+2 = 4

- Based on above syndrome and scoring algorithm, system counts total score and advice user as below:

·       Score < 5 : Merely have chance to get affected by COVID-19. Advice patient for isolation and contact doctor and follow advice.
* Count as COVID-19 “Negative”.

·       Score ≥ 5 : Possible suspected case for COVID-19 affected. Advice patient for isolation and contact doctor and follow advice.
* Count as COVID-19 “Positive”.

·       Score > 5  and < 7 : Highly chance of COVID-19 affected. Advice patient for isolation and contact doctor immediately and follow advice. Show patient a list of emergency phone numbers to contact in case of any emergency.
* Count as COVID-19 “Positive”.

·       Score > 7 : Almost confirmed case of COVID-19 positive. Advice patient for isolation and contact doctor immediately and follow advice. Highly advice patient to be hospitalized. Show patient a list of emergency phone numbers to contact in case of any emergency.
* Count as COVID-19 “Positive”.



 

 




- System keeps all records in a simple database table and display as Result history.

