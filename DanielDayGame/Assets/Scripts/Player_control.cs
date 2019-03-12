using System.Collections;
using System.Collections.Generic;
using UnityEngine;
using UnityEngine.SceneManagement;

public class Player_control : MonoBehaviour {
	public int count = 0;
	public bool cursor_check = false;
	public float speed = 6.0F;
	public float gravity = 20.0F;

	private Vector3 moveDirection = Vector3.zero;
	public CharacterController controller;

	void Start() {
	// Store reference to attached component
		controller = GetComponent<CharacterController>();
	}

	void Update() {
		if(Input.GetKey(KeyCode.Escape)) {
				cursor_check = false;
			}
			if(Input.GetKey(KeyCode.Space)) {
				cursor_check = true;
			}
			if (cursor_check) {
				Cursor.lockState = CursorLockMode.Locked;
				Cursor.visible = false;
			}
			else {
				Cursor.lockState = CursorLockMode.None;
				Cursor.visible = true;
			}
		if(controller.transform.position.y >= 10 || controller.transform.position.y <= -10) {
			Cursor.lockState = CursorLockMode.None;
			Cursor.visible = true;
			SceneManager.LoadScene(SceneManager.GetActiveScene().buildIndex - 1);
		}
		//Load Level 1
		if(controller.transform.position.x > 5 && controller.transform.position.z <= -51) {
			Cursor.lockState = CursorLockMode.None;
			Cursor.visible = true;
			SceneManager.LoadScene(SceneManager.GetActiveScene().buildIndex + 1);
		}//Shift + Ctrl + P to pause the game if your mouse gets stuck
		if(controller.transform.position.x <= -18 && controller.transform.position.z >= 3) {
			Cursor.lockState = CursorLockMode.None;
			Cursor.visible = true;
			SceneManager.LoadScene(SceneManager.GetActiveScene().buildIndex + 2);
		}
	// Character is on ground (built-in functionality of Character Controller)
	if (controller.isGrounded) {
			if(Input.GetKey(KeyCode.Escape)) {
				cursor_check = false;
			}
			if(Input.GetKey(KeyCode.Space)) {
				cursor_check = true;
			}
			if (cursor_check) {
				Cursor.lockState = CursorLockMode.Locked;
				Cursor.visible = false;
			}
			else {
				Cursor.lockState = CursorLockMode.None;
				Cursor.visible = true;
			}
			float rotLeftRight = Input.GetAxis("Mouse X");
			transform.Rotate(0, rotLeftRight, 0);
			
	// Use input up and down for direction, multiplied by speed
	moveDirection = new Vector3(Input.GetAxis("Horizontal"), 0, Input.GetAxis("Vertical"));
	moveDirection = Camera.main.transform.TransformDirection(moveDirection);
	moveDirection *= speed;

	}
	// Apply gravity manually.
	moveDirection.y -= gravity * Time.deltaTime;
	// Move Character Controller
		controller.Move(moveDirection * Time.deltaTime);
		}
	void OnTriggerEnter(Collider other) {
		if (other.gameObject.CompareTag("Pick Up")) {
			other.gameObject.SetActive(false);
			count++;
		}
		if (count == 1) {
			Destroy(GameObject.Find("ZombieCube"));
		}
		if (count == 2) {
			Destroy(GameObject.Find("ZombieCube_1"));
		}
		if (count == 3) {
			Destroy(GameObject.Find("ZombieCube_2"));
		}
	}
}