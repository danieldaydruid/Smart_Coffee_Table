using System.Collections;
using System.Collections.Generic;
using UnityEngine;
using UnityEngine.SceneManagement;

public class main_menu_buttons : MonoBehaviour {
	public void Update() {
		Cursor.lockState = CursorLockMode.None;
		Cursor.visible = true;
	}
	public void PlayGame() {
		SceneManager.LoadScene(SceneManager.GetActiveScene().buildIndex + 1);
	}
	public void ExitGame() {
        	Application.Quit();
 	}
}
